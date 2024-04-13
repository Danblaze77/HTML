<?php
class bankacc
{
    public $acc_no;
    public $savings;
    public function __construct($a,$s)
    {
        $this->acc_no=$a;
        $this->savings=$s;
    }
    function display()
    {
        echo $this->acc_no.' '.$this->savings;
        "<br>";
    }
public function deposit($amount)
{
    if($amount>0)
    {
        $this->savings+=$amount;
        echo "Amount deposited" .$amount;
        "<br>";
    }
    else
    {
        echo "Amount can't be deposited";   
        "<br>";
    }
}
public function withdraw($amount)
{
    if($amount>0 && $amount<= $this->savings)
    {
        $this->savings -= $amount;
            echo "Withdrew: $amount. New Balance: $this->savings";
            "<br>";
        } elseif ($amount > $this->savings) {
            echo "Insufficient balance for withdrawal.";
            "<br>";
        } else {
            echo "Withdrawal amount must be positive.";
            "<br>";
        }
    }
public function getBalance()
{
    return $this->savings;
}
}
class Customer
{
    public $name;
    public $bankAccount;
    public function __construct($name, bankacc $bankAccount)
    {
        $this->name = $name;
        $this->bankAccount = $bankAccount;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getBankAccount()
    {
        return $this->bankAccount;
    }
}
$account = new bankacc('123456789', 1000);
$customer = new Customer('John Doe', $account);
$customer->getBankAccount()->deposit(500);
$customer->getBankAccount()->withdraw(300);
echo "Current Balance: " . $customer->getBankAccount()->getBalance();

?>

