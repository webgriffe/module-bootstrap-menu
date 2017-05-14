<?php

namespace Webgriffe\BootstrapMenu\View\Element\Html\Link;

class Current extends \Magento\Framework\View\Element\Html\Link\Current
{
    protected function _toHtml()
    {
        if (false != $this->getTemplate()) {
            return parent::_toHtml();
        }

        $highlight = '';

        if ($this->getIsHighlighted() || $this->isCurrent()) {
            $highlight = ' active';
        }

        $html = '<li class="nav item' . $highlight . '"><a href="' . $this->escapeHtml($this->getHref()) . '"';
        $html .= $this->getTitle()
            ? ' title="' . $this->escapeHtml((string)new \Magento\Framework\Phrase($this->getTitle())) . '"'
            : '';
        $html .= $this->getAttributesHtml() . '>';

        if ($this->getIsHighlighted()) {
            $html .= '<strong>';
        }

        $html .= $this->escapeHtml((string)new \Magento\Framework\Phrase($this->getLabel()));

        if ($this->getIsHighlighted()) {
            $html .= '</strong>';
        }

        $html .= '</a></li>';

        return $html;
    }
}
