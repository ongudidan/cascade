<?php

namespace app\components;

use Yii;
use yii\base\Component;

use yii\web\UploadedFile;

class Upload extends Component
{
    public static function upload($model, $formAtribute, $attribute)
    {
        $uploadedFile = UploadedFile::getInstance($model, $formAtribute);
        $uploadsDir = Yii::getAlias('@webroot/web/uploads');

        // print_r($uploadedFile);
        // exit;

        if ($uploadedFile) {
            $oldFilePath = $uploadsDir . '/' . $model->$attribute;
            $newFileName = uniqid() . '.' . $uploadedFile->extension;
            $newFilePath = $uploadsDir . '/' . $newFileName;

            // Delete old file if it exists
            if (file_exists($oldFilePath)) {
                @unlink($oldFilePath);
            }

            if ($uploadedFile->saveAs($newFilePath)) {
                $model->$attribute = $newFileName;
            }

            return true;

        } else {

            return false;
        }
    }
}
