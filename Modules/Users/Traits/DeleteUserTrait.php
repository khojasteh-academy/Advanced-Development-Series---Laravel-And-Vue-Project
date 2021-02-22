<?php


namespace Modules\Users\Traits;


trait DeleteUserTrait
{
    public function deleteUser($id)
    {
        $user = $this->userRepository->findSingle($id);
        return $this->userRepository->delete($user);
    }

    public function deleteMultipleUser($users)
    {
        foreach ($users as $user) {
            $item = $this->userRepository->findSingle($user['userCode']);
            $this->userRepository->delete($item);
        }
    }

}
