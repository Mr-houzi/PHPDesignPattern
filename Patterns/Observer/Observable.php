<?php
namespace Patterns\Observer;

/**
 * 被观察者实体类
 *
 * 实现附加观察者，删除观察者，通知观察者方法
 */
class Observable implements ObservableInterface
{
    private $_observers = [];
    private $_name = '【被观察者:香菇】';
    public function __get($name='')
    {
        return $this->$name;
    }

    public function attach(ObserverInterface $observer)
    {
        if (!in_array($observer, $this->_observers, true)) {
            $this->_observers[] = $observer;
        }
    }

    public function detach(ObserverInterface $observer)
    {
        foreach ($this->_observers as $k => $v) {
            if ($v === $observer) {
                unset($this->_observers[$k]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->_observers as $v) {
            $v->doSomething($this);
        }
    }
}