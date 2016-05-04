<?php
namespace lib;
/**
 * 通过传入的数据，渲染到模板文件里
 */
class TemplateHelper{
    /**
     * 
     * @param array $articles 要显示的文章
     * @param string $templateVersion 参数会拼装为TemplateHtml，然后从模板文件找
     */
    public function render($articles, $templateVersion = '01'){
        
        $template = include __DIR__.'/TemplateHtml_'.$templateVersion.'.php';
        
        return $template;
    }
    
}