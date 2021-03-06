<?php
/**
 * 建议在PHP5.6以上版本运行
 * @author Lubin Chen <newlubin@163.com>
 * @version 2016-05-04
 */

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
    
    /**
     * 
     * @param array $articles
     * @param type $templateVersion
     * @return type
     */
    public function renderRss2($articles){
        echo '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>';
        $template = include __DIR__.'/TemplateRss.php';
        
        return $template;
    }
    
}
