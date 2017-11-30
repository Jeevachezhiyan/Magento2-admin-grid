<?php



namespace Magestore\Company\Block\Adminhtml;


class Employee extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor.
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_staff';
        $this->_blockGroup = 'Magestore_Company';
        $this->_headerText = __('Users List');
     
        parent::_construct();
    }
}
