<?
#Counts lines of code in .php files
echo shell_exec("find . -name '*.php' -not -path './securimage/*' | xargs wc -l");
?>