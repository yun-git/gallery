<?php
// 本类由系统自动生成，仅供测试用途
class ImageAction extends Action
{
    public function _empty()
    {
        header('content-type:image/jpeg');
        $id = empty($_GET['id'])?1:$_GET['id'];
        $width = empty($_GET['w'])?200:$_GET['w'];
        $height = empty($_GET['h'])?200:$_GET['h'];
        $M = M('file');
        $img = $M->find($id);
        $imagePath = $img['url'];
        $thumbName = md5($imagePath.$width.$height);
        $thumbDir = 'cache/image/thumb/';
        $thumbPath = $thumbDir.$thumbName;
        
        if( !file_exists($thumbPath) )
        {
            create_dir($thumbDir);
            import('ORG.Net.WindImage');
            WindImage::makeThumb($imagePath,$thumbPath,$width,$height);
        }
        echo readfile($thumbPath);
    }
    public function info()
    {
        import('ORG.Net.WindImage');
        $info = WindImage::getImgInfo('http://img1.mm131.com/pic/1462/5.jpg');
		print_r($info);
    }
}