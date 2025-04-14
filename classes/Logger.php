<?php
namespace MonProjet;
trait Logger {
    public function log(string $message): void {
        $now = (new DateTime())->format('Y-m-d H:i:s');
        echo "[LOG] ($now) : $message\n";
    }
}
?>

