#include "mainwindow.h"
#include "ui_mainwindow.h"
#include <QFileDialog>
#include <QMessageBox>
#include <QScrollBar>

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);
    mainScene = new QGraphicsScene(QRect(0,0,800,600));
    ui->mainGraphic->setScene(mainScene);

    ui->sld_contrast->setMinimum(-100);
    ui->sld_contrast->setMaximum(100);
   // ui->sld_contrast->setCursor(0);

    ui->sld_light->setMinimum(-100);
    ui->sld_light->setMaximum(100);
   // ui->sld_light->setCursor(0);

    ui->sld_rotate->setMinimum(0);
    ui->sld_rotate->setMaximum(180);

    ui->sld_zoom->setMaximum(1);
    ui->sld_zoom->setMaximum(5);
}

MainWindow::~MainWindow()
{
    delete ui;
}

void MainWindow::on_btn_open_clicked()
{
    QString filename;
    filename = QFileDialog::getOpenFileName(this,tr("选择图像"),"",
                                            tr("Images (*.png *.bmp *.jpg *.tif *.GIF)")); //选择路径
    if(filename.isEmpty())
    {
        return;
    }
    else
    {
        if(!(currentImg.load(filename)))
        {QMessageBox::information(this,tr("error"),tr("打开图像失败!"));
           return;
        }
        currentImg.scaled(300,300,Qt::KeepAspectRatio);

       // ui->mainlabel->setPixmap(QPixmap::fromImage(currentImg)); //显示图像
         mainItem =  mainScene->addPixmap(QPixmap::fromImage(currentImg));

     }

}

void MainWindow::on_btn_save_clicked()
{
    QString filename = QFileDialog::getSaveFileName(this,tr("Save Image"),"",
        tr("*.bmp;; *.png;; *.jpg;; *.tif;; *.GIF")); //选择路径
    if(filename.isEmpty())
    {
        return;
    }
    else
    {
        if(! ( saveImg.save(filename) ) ) //保存图像
        {
            QMessageBox::information(this,tr("Error"),tr("Failed to save the image!"));
            return;
        }
    }
}

void MainWindow::on_btn_MoveUp_clicked()
{
     mainItem->setPos(mainItem->pos()+ QPointF(0,-5));
}

void MainWindow::on_btn_MoveDown_clicked()
{
    mainItem->setPos(mainItem->pos()+ QPointF(0,5));
}

void MainWindow::on_btn_MoveLeft_clicked()
{
    mainItem->setPos(mainItem->pos()+ QPointF(-5,0));
}

void MainWindow::on_btn_MoveRight_clicked()
{
     mainItem->setPos(mainItem->pos()+ QPointF(+5,0));

}

void MainWindow::on_btn_Mirror_clicked()
{
    QImage temp=currentImg.mirrored(true,false);
    //currentImg = currentImg.mirrored(true,false);
    mainItem->setPixmap(QPixmap::fromImage(temp));
    currentImg=temp;
    saveImg=currentImg;

}

QImage MainWindow::changeLight(QImage &image,int position)
{
    //QImage image= currentImg;
    uchar* line=image.scanLine(0);
    uchar* pixel= line;

    for(int y=0;y<currentImg.height();++y)
    {
        pixel =line;
        for(int x=0; x<currentImg.width();++x)
        {
            *pixel = qBound(0,*pixel + position,255);
            *(pixel+1)= qBound(0,*(pixel+1) + position,255);
            *(pixel+2)= qBound(0,*(pixel+2) + position,255);
            pixel +=4;
        }
        line += image.bytesPerLine();
    }

    return image;

}

void MainWindow::on_sld_light_sliderMoved(int position)
{
    QImage temp =currentImg;
    temp = changeLight(temp,position);
    mainItem->setPixmap(QPixmap::fromImage(temp));
    saveImg=temp;

}

QImage MainWindow::changeContrast(QImage &image,int position)
{
    uchar *line =image.scanLine(0);
    uchar *pixel = line;

    for (int y = 0; y < image.height(); ++y)
    {
        pixel = line;
        for (int x = 0; x < image.width(); ++x)
        {
            *pixel = 127+ (double((double)*pixel - 127.0)/(1.0 - (double)position / 100));
            *(pixel + 1) =127+ (double((double)*(pixel + 1)  - 127.0)/(1.0 - (double)position / 100));
            *(pixel + 2) = 127+ (double((double)*(pixel + 2) - 127.0)/(1.0 - (double)position / 100));
            pixel += 4;
        }

        line += image.bytesPerLine();
    }
    return image;
}


void MainWindow::on_sld_contrast_sliderMoved(int position)
{
    QImage temp = currentImg;
    temp= changeContrast(temp,position);
     mainItem->setPixmap(QPixmap::fromImage(temp));
     saveImg=temp;
}

void MainWindow::on_sld_rotate_sliderMoved(int position)
{
    mainItem->setRotation((double)position/3.14);
    mainItem->setPixmap(QPixmap::fromImage(currentImg));
    saveImg=currentImg;
}

void MainWindow::on_sld_zoom_sliderMoved(int position)
{
    currentImg.scaled(currentImg.size()*float(position),Qt::KeepAspectRatio);
    mainItem->setPixmap(QPixmap::fromImage(currentImg));
     mainItem->setScale(float(position));
     saveImg=currentImg;
}
