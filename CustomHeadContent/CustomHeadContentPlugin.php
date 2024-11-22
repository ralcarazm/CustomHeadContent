<?php
class CustomHeadContentPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'install',
        'uninstall',
        'config_form',
        'config',
        'public_head',
    );

    public function hookInstall()
    {
        set_option('custom_head_content', '');
    }

    public function hookUninstall()
    {
        delete_option('custom_head_content');
    }

    public function hookConfigForm()
    {
        include 'views/admin/config_form.php';
    }

    public function hookConfig($args)
    {
        $post = $args['post'];
        if (isset($post['custom_head_content'])) {
            set_option('custom_head_content', $post['custom_head_content']);
        }
    }

    public function hookPublicHead()
    {
        $customContent = get_option('custom_head_content');
        if ($customContent) {
            echo $customContent;
        }
    }
}
