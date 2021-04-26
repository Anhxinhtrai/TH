<?php
include "Node.php";
include "Queue.php";

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

echo $queue->dequeue() . "<br>";
echo $queue->dequeue() . "<br>";
echo $queue->dequeue() . "<br>";
if ($queue->isEmpty() == true) {
    echo "có rỗng";
}else{
    echo "không rỗng";
}

