# Início
Container externo deve possuir 'display: grid' ou 'display:inline-grid'
para que os filhos sejam elementos 'grid'

### GRID-CONTAINER

- 'display: grid' = grid do tipo block
- 'display: inline-grid' = grid to tipo inline

---

- gaps = espaços entre linhas / colunas
- 'grid-column-gap: 10px;'
- 'grid-row-gap: 20px;'
- 'grid-gap: 40px;' 'grid-gap: 10px 50px;'

---

- 'grid-template-columns: 10px auto 20vh 40%;'
- 'grid-template-rows: 60px auto auto;'

---

- 'justify-content' = alinhamento vertical
- 'align-content' = alinhamento horizontal

### GRID_ITEM

- Divisoes entre as linhas = row-lines
- Divisoes entre as colunas = column-lines
- 'grid-column-start: 1;' 'grid-column-end: 3;'
- 'grid-row-start': 2;' 'grid-row-end: 4;'
- 'grid-column: 1 / 3;' 'grid-column: 1 / span 2;'
- 'grid-row: 2 / 4;' 'grid-row: 2 / span 2'

---

- 'grid-area' = atalho para 'grid-row' e 'grid-column'
- 'grid-area: 1 / 2 / 5 / 6;' *rs cs re ce*
- 'grid-area: 2 / 1 / span 3 / span 2;'

---

- Usando as propriedades 'grid-column', 'grid-row' e 'grid-area',
é possível posicionar os elementos em uma ordem distinta daquela apresentada no HTML

##### GRID-AREA + GRID-TEMPLATE-AREA

\#grid-item1 {

        grid-area: nome1;

}

\#grid-item2 {

        grid-area: nome2;

}

\#grid-container {

        grid-template-areas: '. . nome1 nome1 .'
                             'nome2 . nome1 nome1 .'
                             'nome2 . . .';

}

### GRID AUTO

- 'grid-auto-rows:<tamanho>|auto|min-content|max-content' = tamanho unico para as linhas
- 'grid-auto-columns' = mesma coisa para as colunas
- 'grid-auto-flow:column|row'
