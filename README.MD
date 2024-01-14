## To use on Dojos

1 - run `docker-compose up -d`

2 - run `docker-compose exec php composer install`

3 - create your tests on `/tests` folder

4 - create your classes on `/src` folder

5 - run `docker-compose exec php composer test` to run all tests

6 - enjoy!

---

## Problem
Caixa Eletrônico

Desenvolva um programa que simule a entrega de notas quando um cliente efetuar um saque em um caixa eletrônico. Os requisitos básicos são os seguintes:

Entregar o menor número de notas;
É possível sacar o valor solicitado com as notas disponíveis;
Saldo do cliente infinito;
Quantidade de notas infinito (pode-se colocar um valor finito de cédulas para aumentar a dificuldade do problema);
Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00
Exemplos:

Valor do Saque: R$ 30,00 – Resultado Esperado: Entregar 1 nota de R$20,00 e 1 nota de R$ 10,00.
Valor do Saque: R$ 80,00 – Resultado Esperado: Entregar 1 nota de R$50,00 1 nota de R$ 20,00 e 1 nota de R$ 10,00.