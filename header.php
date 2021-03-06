<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php $this->options->description() ?>">
        <meta name="keyword"  content="<?php $this->options->keywords() ?>">
        <title>
        <?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ' - '); ?><?php $this->options->title(); ?>
        </title>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('aircloud.css'); ?>">
        <link href="//at.alicdn.com/t/font_1329505_89vjcoloe0w.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="backToTop" id="top" title="返回顶部">返回顶部</div>
        <div class="site-nav-toggle" id="site-nav-toggle">
        <button>
            <span class="btn-bar"></span>
            <span class="btn-bar"></span>
            <span class="btn-bar"></span>
        </button>
        </div>
        <div class="index-about">
            <i> <?php $this->options->description() ?> </i>
        </div>
        <div class="index-container">
            <div class="index-left">
                <?php $this->need('nav.php') ?>
                <div class="index-about-mobile">
                    <i> <?php $this->options->description() ?> </i>
                </div>
            </div>
