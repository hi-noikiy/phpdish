<?php

namespace PHPDish\Bundle\UserBundle\Model;

trait UserAwareTrait
{
    /**
     * 设置作者.
     *
     * @param UserInterface $user
     *
     * @return $this
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * 获取用户.
     *
     * @return UserInterface
     */
    abstract public function getUser();
}
