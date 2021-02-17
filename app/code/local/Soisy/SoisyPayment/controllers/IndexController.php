<?php
class Soisy_SoisyPayment_IndexController extends Mage_Core_Controller_Front_Action
{

    public function IndexAction() {

        $this->loadLayout();
        $this->getLayout()->getBlock("head")->setTitle($this->__("Soisy"));
        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
        $breadcrumbs->addCrumb("home", array(
            "label" => $this->__("Home Page"),
            "title" => $this->__("Home Page"),
            "link"  => Mage::getBaseUrl()
        ));

        $breadcrumbs->addCrumb("soisy", array(
            "label" => $this->__("Soisy"),
            "title" => $this->__("Soisy")
        ));

        if (!is_null($this->getRequest()->getParam('error')))
            $this->getLayout()->getBlock("soisypayment_index")->setData("error",true);

        $this->renderLayout();

    }



}