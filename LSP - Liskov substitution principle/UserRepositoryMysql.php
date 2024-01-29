<?php
interface ProductRepository
{
    public function save(Product $product): void;
    public function saveAll(Users $users): void;
}


final class ProductRepositoryMySql extends Repository implements ProductRepository
{
    public function save(User $user): void{
        $this->savePreflush($user);
    }

    public function saveAll(Users $users)
    {
        $this->entityManager()->flush($users);
    }

    private function savePreflush(User $user)
    {
        $this->entityManager->persist($user);
    }
}