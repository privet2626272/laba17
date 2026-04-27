<?php

echo 'Задание 1<br>';
echo 'Ответ:<br>';

class Работник {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setAge($newAge) {
        if ($this->checkAge($newAge)) {
            $this->age = $newAge;
        } else {
            echo 'Вы нам не подходите<br>';
        }
    }

    public function checkAge($age) {
        return $age >= 18;
    }
}


$worker1 = new Работник('Фира', 25, 50000);
$worker2 = new Работник('Ева', 30, 60000);


$sumSalary = $worker1->getSalary() + $worker2->getSalary();
$sumAge = $worker1->getAge() + $worker2->getAge();

echo 'Сумма зарплат: ' . $sumSalary . '<br>';
echo 'Сумма возрастов: ' . $sumAge . '<br><br>';

echo 'Задание 2<br>';
echo 'Ответ:<br>';

echo 'Имя 1 работника: ' . $worker1->getName() . '<br>';
echo 'Возраст 1 работника: ' . $worker1->getAge() . '<br>';
echo 'Зарплата 1 работника: ' . $worker1->getSalary() . '<br><br>';


echo 'Имя второго работника: ' . $worker2->getName() . '<br>';
echo 'Возраст второго работника: ' . $worker2->getAge() . '<br>';
echo 'Зарплата второго работника: ' . $worker2->getSalary() . '<br><br>';

echo 'Задание 3<br>';
echo 'Ответ:<br>';

class QWERTY extends Работник {
    private static $allWorkers = [];

    public function __construct($name, $age, $salary) {
        parent::__construct($name, $age, $salary);
        self::$allWorkers[] = $this;
    }

    public static function getTotalSalary() {
        $total = 0;
        foreach (self::$allWorkers as $worker) {
            $total += $worker->getSalary();
        }
        return $total;
    }
}


$worker1_new = new QWERTY('Иван', 25, 50000);
$worker2_new = new QWERTY('Мария', 30, 60000);

echo 'Сумма зарплат всех работников: ' . QWERTY::getTotalSalary() . '<br><br>';

echo 'Задание 4<br>';
echo 'Ответ:<br>';

echo 'Текущий возраст Ивана: ' . $worker1_new->getAge() . '<br>';
$worker1_new->setAge(26);
echo 'Новый возраст Ивана: ' . $worker1_new->getAge() . '<br>';
$worker1_new->setAge(17); 
echo '<br>';

echo 'Задание 5<br>';
echo 'Ответ:<br>';

echo 'Проверка возраста Фиры (должно быть true): ' . ($worker1_new->checkAge(26) ? 'true' : 'false') . '<br>';
echo 'Проверка возраста на 17 лет (должно быть false): ' . ($worker1_new->checkAge(17) ? 'true' : 'false') . '<br><br>';


echo 'Задание 6<br>';
echo 'Ответ:<br>';

echo 'Попытка изменить возраст Евы на 31 год:' .'<br>';
$worker2_new->setAge(31);
echo 'Текущий возраст Евы: ' . $worker2_new->getAge() . '<br>';

echo 'Попытка изменить возраст Евы на 16 лет:<br>';
$worker2_new->setAge(16);
echo '<br>';

