<?php

if (!defined('_PS_VERSION_'))
    exit;

class WaitingList extends Module
{
    public function __construct()
    {
        $this->name = 'waitinglist';
        $this->tab = 'front_office_features';
        $this->version = '0.1.0';
        $this->author = 'Bartłomiej Różycki';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Powerful waiting list');
        $this->description = $this->l('For my ally is the Force, and a powerful ally it is.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        $sql = 'CREATE TABLE `ps_preorder_list`
                (
                id INT NOT NULL AUTO_INCREMENT,
                id_product INT NOT NULL,
                email_address VARCHAR(255) NOT NULL,
                active boolean DEFAULT TRUE,
                data_created DATETIME DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (ID)
                );';


        if (!parent::install() ||
            !Db::getInstance()->execute($sql) ||
            !$this->registerHook('displayRightColumnProduct') ||
            !$this->registerHook('actionAdminControllerSetMedia')
        )
            return false;

        return true;
    }

    public function getContent()
    {
        $html = '';

        if(Tools::isSubmit('submitUpdate'))
        {
            Configuration::updateValue('WAITING_LIST_TEXT', Tools::getValue("ourtext"));
            $html .= $this->displayConfirmation($this->l('Text Updated'));
        }

        $html .= '
            <form action="'.$_SERVER['REQUEST_URI'].'" method="post" class="defaultForm form-horizontal">
                <div class="panel">
                    <div class=""panel-heading">'.$this->l('Settings').'</div>';

        $html .= '
                    <div class="form-group">
                        <label class="control-label col-lg-3">'.$this->l('The text of the form').'</label>
                        <div class="col-lg-6">
                            <textarea name="ourtext" id="mytextarea" class="rte" cols="30" rows="10">'.Configuration::get('WAITING_LIST_TEXT').'</textarea>
                        </div>
                    </div>
        ';

        $html .= '<input type="submit" name="submitUpdate" value="'.$this->l('Save').'" class="btn btn-default" /> 
                </div>
            </form>';

        $html .= '<script src=\'//cloud.tinymce.com/stable/tinymce.min.js\'></script>';
        $html .= '<script>
                tinymce.init({
                    selector: \'#mytextarea\'
                });
            </script>
        ';

        return $html;
    }

    public function hookDisplayRightColumnProduct()
    {
        $html = '
            <form action="'.$_SERVER['REQUEST_URI'].'" method="post" class="defaultForm form-horizontal">
                <div class="panel">
                    <div class=""panel-heading">'.Configuration::get('WAITING_LIST_TEXT').'</div>';

        $html .= '
                    <div class="form-group">
                        <div class="col-lg-6">
                            <input type="text" name="email_address" id="email_address" value="'.Tools::getValue("email_address").'"/>
                        </div>
                    </div>
        ';

        if(Tools::isSubmit('submitAdd'))
        {
            $email = Tools::getValue("email_address");
            if(empty($email)){
                $html .= '<p style="color: red;">'.$this->l('Email address cannot be empty!').'</p>';
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $html .= '<p style="color: red;">'.$this->l('Email address is not correct!').'</p>';
                } else {
                    $id_product = Tools::getValue('id_product');

                      // I was trying this way, but it doesn't work. I don't really know why.
                    $insertData = array(
                        'id_product' => (int)$id_product,
                        'email_address' => pSQL($email)
                    );

                    if(Db::getInstance()->insert("preorder_list", $insertData)){
                        $sql = 'SELECT COUNT(*) FROM '._DB_PREFIX_.'preorder_list WHERE id_product = '.(int)$id_product;
                        if($waiting_number = Db::getInstance()->getValue($sql)) {
                            $html .= '<p style="color: green;">' . $this->l('You\'re') . ' ' . $waiting_number . ' ' . $this->l('on waiting list') . '</p>';
                        } else {
                            $html .= '<p style="color: red;">' . $this->l('You\'re on waiting list now') . '</p>';
                        }
                    } else{
                        $html .= '<p style="color: red;">'.$this->l('Something went wrong. Please try again.').'</p>';
                    }
                }
            }
        }

        $html .= '
                    <input type="submit" name="submitAdd" id="submitBtn" value="'.$this->l('Add to waitlist').'" class="btn btn-default" />
                    
                </div>
            </form>
            <script>
                $(document).ready(function () {
                    $("#submitBtn").click(function () {
                        var email = document.getElementById("email_address");
                        if(isEmptyOrSpaces(email.value)){
                            email.style.borderColor = "red";        
                            return false;
                        }
                    });
                    
                    function isEmptyOrSpaces(str){
                        return str === null || str.match(/^ *$/) !== null;
                    }
                });
            </script>
        ';

        return $html;
    }

    public function hookActionAdminControllerSetMedia()
    {
        $this->context->controller->addJS(_PS_JS_DIR_.'tiny_mce/tiny_mce.js');
        $this->context->controller->addJS(_PS_JS_DIR_.'admin/tinymce.inc.js');
    }

    public function uninstall()
    {

        $sql = "DROP TABLE IF EXISTS `ps_preorder_list`;";
        if (!parent::uninstall() ||
            !Configuration::deleteByName('WAITING_LIST_TEXT') ||
            !Db::getInstance()->execute($sql)

        )
            return false;

        return true;
    }


}