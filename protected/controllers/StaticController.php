<?php
class StaticController extends Controller
{
    private function _renderFile($path) {
        $mimetype = CFileHelper::getMimeTypeByExtension($path);

        if (file_exists($path)) {
            header('Content-type: ' . $mimetype);
            echo file_get_contents($path);
        }
        else {
            throw new CHttpException(404, "File don't exists");
        }
    }

    public function actionBower($component) {
        $path = Yii::getPathOfAlias('webroot.app.bower_components');
        $path = $path . DS . $component;
        $this->_renderFile($path);
    }

    public function actionStyle($style) {
        $path = Yii::getPathOfAlias('webroot.app.styles');
        $path = $path . DS . $style;
        $this->_renderFile($path);
    }

    public function actionScript($script) {
        $path = Yii::getPathOfAlias('webroot.app.scripts');
        $path = $path . DS . $script;
        $this->_renderFile($path);
    }

    public function actionViews($view) {
        $path = Yii::getPathOfAlias('webroot.app.views');
        $path = $path . DS . $view;
        $this->_renderFile($path);
    }

    public function actionImages($image) {
        $path = Yii::getPathOfAlias('webroot.app.images');
        $path = $path . DS . $image;
        $this->_renderFile($path);
    }
}
?>
