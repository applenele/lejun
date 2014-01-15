class verifyAction extends Action{
Public function verify(){
    import('ORG.Util.Image');
    Image::buildImageVerify();
}
}