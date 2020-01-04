#ifndef MAINWINDOW_H
#define MAINWINDOW_H

#include <QMainWindow>
#include <QGraphicsItem>
#include <QGraphicsPixmapItem>

namespace Ui {
class MainWindow;
}

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindow(QWidget *parent = 0);
    ~MainWindow();

private slots:
    void on_btn_open_clicked();

    void on_btn_save_clicked();

    void on_btn_MoveUp_clicked();

    void on_btn_MoveDown_clicked();

    void on_btn_MoveLeft_clicked();

    void on_btn_MoveRight_clicked();

    void on_btn_Mirror_clicked();

    void on_sld_light_sliderMoved(int position);

    void on_sld_contrast_sliderMoved(int position);

    void on_sld_rotate_sliderMoved(int position);

    void on_sld_zoom_sliderMoved(int position);

private:
    QImage changeLight(QImage &image,int position);
    QImage changeContrast(QImage &image,int position);

    Ui::MainWindow *ui;
    QImage currentImg;
    QImage saveImg;

    QGraphicsPixmapItem * mainItem;
    QGraphicsScene * mainScene;
};

#endif // MAINWINDOW_H
