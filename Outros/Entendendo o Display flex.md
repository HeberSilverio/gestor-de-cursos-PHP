## Entendendo o Display flex

* **display: flex;** - Tudo vai para uma linha só. Porque por padrão o display flex possui uma propriedade chamada flex direction e a flex direction vai colocar todos os elementos em uma mesma linha.

  

  É a partir da propriedade flex-direction que é definido o eixo principal e o eixo secundário. O flex box tem um eixo principal que por padrão é a linha, mas você pode mudar através do flex direction column e o eixo principal passa a ser a coluna. E o eixo secundário que cruza o eixo principal é exatamente o cross axis(eixo transversal).

  Se o eixo principal for linha o secundário é coluna. O eixo secundário é definido por align-items.

  

  **flex-direction: column;** - coloca os elementos principais no eixo da coluna.

* **flex-direction: column-reverse;** - Coloca no eixo da coluna, porém na parte de baixo e ainda invertendo a ordem dos elementos.

* **flex-direction: row-reverse;** - coloca os elementos principais em linha, trocando a ordem dos elementos e colocando tudo do lado direito.

  

Isso é importante porque a propriedade justify-content vai aplicar o alinhamento em cima do eixo-principal, não importa se o eixo principal é a linha ou a coluna, ele sempre vai aplicar no eixo-principal.

## justify-content - alinha o eixo principal

Alinha os itens flex no container de acordo com a direção. A propriedade só funciona se os itens atuais não ocuparem todo o container. Isso significa que ao definir flex: 1; ou algo similar nos itens, a propriedade não terá mais função

Excelente propriedade para ser usada em casos que você deseja alinhar um item na ponta esquerda e outro na direita, como em um simples header com marca e navegação.

- justify-content: *flex-start;*// Alinha os itens ao início do container.
- justify-content: *flex-end;*// Alinha os itens ao final do container.
- justify-content: *center;*// Alinha os itens ao centro do container.
- justify-content: *space-between;*// Cria um espaçamento igual entre os elementos. Mantendo o primeiro grudado no início e o último no final.
- justify-content: *space-around;*// Cria um espaçamento entre os elementos. Os espaçamentos do meio são duas vezes maiores que o inicial e final.

* **justify-content: flex-start;** - coloca os elementos no inicio do eixo principal.
* **justify-content: flex-end;** - coloca os elementos no final do eixo principal.
* **justify-content: center;** - coloca os elementos no centro do eixo principal.
* **justify-content: space-betwenn;** - coloca um espaço entre os elementos do eixo principal, sem deixar espaços nos extremos.
* **justify-content: space-around;** - coloca um espaço entre os elementos do eixo principal, porém colocar espaços nos extremos.

## align-items - alinha eixo secundário ou cross axis

O align-items alinha os flex itens de acordo com o eixo do container. O alinhamento é diferente para quando os itens estão em colunas ou linhas.

Essa propriedade permite o tão sonhado alinhamento central no eixo vertical, algo que antes só era possível com diferentes hacks.

- align-items: *stretch;*// Valor padrão, ele que faz com que os flex itens cresçam igualmente.
- align-items: *flex-start;*// Alinha os itens ao início.
- align-items: *flex-end;*// Alinha os itens ao final.
- align-items: *center;*// Alinha os itens ao centro.
- align-items: *baseline;*// Alinha os itens de acordo com a linha base da tipografia.

**justify-content** alinha o main axis (eixo principal e **align-items** serve para alinhar cross axis (eixo secundário), e quem define qual é o principal e o secundário é **flex-direction**.