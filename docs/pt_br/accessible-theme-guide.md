# Tema Accessible para o Moodle: o guia completo

Versão 1.0.0 (estável), para o Moodle 5.2 e posteriores.

Este guia explica o que é o tema Accessible, por que ele existe, as normas que segue, cada recurso que acrescenta, as
fontes que inclui e por que foram escolhidas, como foi testado e o que ele não consegue fazer. Foi escrito para quem
precisa decidir se vai experimentá-lo: administradores de sites, coordenações de acessibilidade, docentes, equipes de
suporte e os próprios usuários.

## Conteúdo

1. [O que é o Accessible](#1-o-que-é-o-accessible)
2. [Por que este tema existe](#2-por-que-este-tema-existe)
3. [Princípios de design](#3-princípios-de-design)
4. [Normas e contexto legal](#4-normas-e-contexto-legal)
5. [Opções pessoais de acessibilidade](#5-opções-pessoais-de-acessibilidade)
6. [Design visual: o que todos os usuários veem](#6-design-visual-o-que-todos-os-usuários-veem)
7. [Leitores de tela e usuários de teclado](#7-leitores-de-tela-e-usuários-de-teclado)
8. [Modo de alto contraste](#8-modo-de-alto-contraste)
9. [Filtros de visão de cores](#9-filtros-de-visão-de-cores)
10. [Fontes: por que estas três](#10-fontes-por-que-estas-três)
11. [Recursos para administradores](#11-recursos-para-administradores)
12. [Privacidade e dados](#12-privacidade-e-dados)
13. [Idiomas](#13-idiomas)
14. [Como o tema foi testado](#14-como-o-tema-foi-testado)
15. [Limites conhecidos](#15-limites-conhecidos)
16. [O Accessible é adequado para o seu site?](#16-o-accessible-é-adequado-para-o-seu-site)
17. [Instalação e configuração](#17-instalação-e-configuração)
18. [Créditos, licenças e fontes](#18-créditos-licenças-e-fontes)

Apêndice A. [Referência técnica](#apêndice-a-referência-técnica)

---

## 1. O que é o Accessible

O Accessible é um tema para o **Moodle 5.2 e posteriores**. É um tema filho do **Boost**, o tema padrão do Moodle, e por
isso mantém o layout, a navegação e o comportamento do Boost, mudando a aparência, a forma como se ajustam ao tamanho do
texto e a forma como são anunciados.

Ele foi criado para três grupos de pessoas:

- **Pessoas cegas** que usam um leitor de tela (como NVDA, JAWS, VoiceOver ou TalkBack). Para elas, o que importa é a
  ordem em que a página é lida, os nomes dos botões e das áreas de navegação, e poder fazer tudo pelo teclado.
- **Pessoas com baixa visão**, por exemplo alguém com cerca de 30% da visão normal que usa um ampliador de tela, o zoom
  do navegador ou lentes especiais. Para elas, o que importa é o contraste, o tamanho, um indicador de foco claro e um
  layout que não se quebre quando tudo é ampliado.
- **Pessoas com deficiência de visão de cores** (daltonismo). Para elas, o que importa é que nenhuma informação seja
  transmitida apenas pela cor e que cores que parecem iguais possam ser vistas como diferentes.

O objetivo é que essas pessoas possam **perceber e navegar** pelo Moodle de forma realmente autônoma, e não apenas que as
páginas passem por uma lista de verificação automática.

O Accessible pode ser usado de duas maneiras: como o **tema do site** para todos, ou como um **tema alternativo** que
cada usuário pode escolher para si, enquanto todos os demais mantêm a aparência habitual do site.

---

## 2. Por que este tema existe

### Os usuários

Os problemas de visão são comuns. O [*World report on vision*](https://www.who.int/publications/i/item/9789241516570) (2019), da Organização Mundial da Saúde, estima que **pelo menos
2,2 bilhões de pessoas** no mundo têm algum comprometimento da visão de perto ou de longe. A deficiência de visão de
cores afeta cerca de **1 em cada 12 homens e 1 em cada 200 mulheres**, segundo a [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/). Em qualquer escola,
universidade ou empresa que use o Moodle, há estudantes, docentes e funcionários nesses grupos, tenham ou não contado isso
a alguém.

### O Moodle e a acessibilidade

O Moodle leva a acessibilidade a sério: seu núcleo é desenvolvido com ela em mente e verificado segundo as WCAG. O Boost,
seu tema padrão, é uma base sólida. Mas um tema de uso geral precisa equilibrar muitos objetivos ao mesmo tempo: marca,
design visual, densidade de informação e as necessidades do usuário médio. Algumas escolhas que servem à maioria das
pessoas são difíceis para os usuários a quem este tema se destina:

- Texto cinza claro e bordas finas que não alcançam os níveis de contraste mais altos.
- Preenchimentos azul-claro ou cinza para indicar estados (selecionado, passar o cursor, desativado), difíceis de ver
  com baixa visão ou com um ampliador.
- Alvos pequenos (ícones, links em linhas) difíceis de acertar com um tremor ou sob ampliação.
- Tamanhos e pontos de quebra em pixels, que não crescem quando o usuário escolhe um tamanho de texto maior.
- Alertas cujo significado depende em grande parte da cor.

A maioria dos temas parte de um design visual e corrige os problemas de acessibilidade depois, uma queixa de cada vez. O
Accessible funciona ao contrário: **o público veio primeiro**, e cada decisão sobre cor, tamanho, ordem e redação foi
tomada pensando nele.

### Não substitui um bom conteúdo

Um tema controla o entorno do conteúdo: menus, botões, formulários, alertas, navegação. Ele não pode reescrever o que
os docentes colocam em seus cursos. Uma imagem sem alternativa em texto, um PDF digitalizado como imagem ou um vídeo sem
legendas continua inacessível, seja qual for o tema. O Accessible torna a plataforma tão clara quanto possível; o
conteúdo dos cursos ainda exige cuidado de seus autores (veja [Limites conhecidos](#15-limites-conhecidos)).

---

## 3. Princípios de design

Cinco regras orientam cada parte do tema.

1. **Simples e de alto contraste por padrão.** O fundo é branco em todo lugar e o texto é preto. Os links são pretos e
   sublinhados (com um sublinhado mais grosso ao passar o cursor), e não azuis nem roxos. A decoração que não ajuda é
   removida, e o que é necessário ganha mais destaque.
2. **A cor nunca é o único sinal.** Todo estado que o Moodle mostra com cor também tem uma forma, um padrão, um símbolo
   ou uma palavra. Os alertas, por exemplo, combinam uma moldura colorida, uma faixa com padrão, um símbolo e o tipo de
   mensagem escrito.
3. **Molduras coloridas, não preenchimentos coloridos.** Os alertas e as mensagens de status mantêm o fundo branco e
   mostram sua cor como uma moldura (borda). Um preenchimento de cor clara reduz o contraste do texto sobre ele; uma
   moldura, não.
4. **Tudo cresce com o texto.** Os tamanhos são relativos (em `rem`), de modo que um tamanho de texto maior produz um
   Moodle maior, com ícones, botões, campos de formulário, painéis laterais e alvos de toque crescendo junto com o texto.
5. **A pessoa decide.** Fonte, tamanho do texto, espaçamento, contraste, movimento, foco e visão de cores são opções
   pessoais. O administrador do site define padrões sensatos e cada usuário pode alterá-los.

---

## 4. Normas e contexto legal

### WCAG 2.1

As [**Web Content Accessibility Guidelines (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) (Diretrizes de Acessibilidade para Conteúdo Web) são a referência internacional em acessibilidade web. Foram
publicadas pelo [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) e se organizam em torno de quatro princípios: o conteúdo deve ser *perceptível*,
*operável*, *compreensível* e *robusto*. Cada critério de sucesso tem um nível:

- **Nível A**: o mínimo.
- **Nível AA**: o nível exigido pela maioria das leis e normas do setor público.
- **Nível AAA**: o nível mais alto. O W3C [não recomenda](https://www.w3.org/WAI/WCAG21/Understanding/conformance) exigir o AAA para sites inteiros, porque alguns critérios
  não podem ser atendidos para todo o conteúdo.

As [WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) acrescentam critérios às 2.1, mas muitas leis ainda se referem às WCAG 2.1 nível AA.

### O que o Accessible busca

O Accessible adota o **nível AAA das WCAG 2.1** como meta para tudo o que o tema desenha. Na prática, isso significa:

| Critério das WCAG | O que pede | O que o tema faz |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 para texto normal, 4,5:1 para texto grande | Todas as cores do tema são escolhidas para 7:1 ou mais, em contraste normal e alto. Medido com varreduras automáticas (veja a [seção 14](#14-como-o-tema-foi-testado)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 para bordas de controles, indicadores de foco e gráficos que transmitem significado | Molduras pretas de 2 px em campos, caixas de seleção e botões de opção; anel de foco preto com um halo branco. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | A cor não é a única forma de transmitir informação | Os alertas têm moldura + padrão + símbolo + palavra; os controles desativados têm borda tracejada; os itens selecionados ficam em negrito ou invertidos. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, e [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | O texto pode ser ampliado até 200% e a página se reorganiza | Opção de tamanho de texto de até 200%, tudo em `rem`, linhas que podem quebrar. Algumas páginas do Moodle ainda rolam para o lado a 200% (veja [Limites conhecidos](#15-limites-conhecidos)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Espaçamento entre linhas, sem texto justificado, cores selecionáveis pelo usuário | Altura de linha 1,6, opções de espaçamento, texto justificado exibido alinhado ao início, opção de alto contraste. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | A página suporta maior espaçamento entre linhas, letras e palavras | A opção de espaçamento «Extra largo» aplica exatamente os valores das WCAG (0,12em nas letras, 0,16em nas palavras) e mais altura de linha. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | O movimento pode ser desativado | Opção de movimento reduzido; a configuração do sistema `prefers-reduced-motion` também é respeitada. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Pular conteúdo repetido | Link «Ir para o conteúdo principal» primeiro em todas as páginas; conteúdo principal antes dos blocos. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | O foco do teclado pode ser visto | Anel de foco de 4 px (8 px com a opção grossa) no lugar do padrão do navegador. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Alvos de pelo menos 44 × 44 pixels CSS | Botões e controles de formulário têm pelo menos 44 px; os campos têm 55 px. Algumas linhas de links do Moodle ainda são menores (veja [Limites conhecidos](#15-limites-conhecidos)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Controles e regiões têm nomes | Toda área de navegação tem um nome; o botão de senha informa seu estado. |

### Leis e normas do setor público

Muitas leis de acessibilidade se baseiam no nível AA das WCAG 2.1, em geral por meio de outras normas:

- **União Europeia.** A [*Diretiva de Acessibilidade da Web*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (Diretiva (UE) 2016/2102) abrange sites e aplicativos do setor público. O
  [*Ato Europeu de Acessibilidade*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (Diretiva (UE) 2019/882) se aplica a muitos produtos e serviços privados a partir de
  28 de junho de 2025. Ambos se apoiam na norma harmonizada [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), que inclui o nível AA das WCAG 2.1 para conteúdo web.
- **Estados Unidos.** A [**Seção 508**](https://www.access-board.gov/ict/) da Lei de Reabilitação abrange as agências federais e se refere às WCAG 2.0 nível AA.
  Em abril de 2024, o Departamento de Justiça [adotou](https://www.ada.gov/resources/2024-03-08-web-rule/) o **nível AA das WCAG 2.1** como norma técnica para os sites de governos
  estaduais e locais, de acordo com o Título II da Lei dos Americanos com Deficiência (ADA). Uma norma final provisória de abril de 2026
  adiou os prazos de cumprimento em um ano (abril de 2027 para entidades que atendem 50.000 pessoas ou mais, abril de 2028 para
  as menores); consulte [ada.gov](https://www.ada.gov/) para ver as datas vigentes.
- Outros países têm normas semelhantes, a maioria baseada nas WCAG.

**O que isso significa para você:** o Accessible é construído em direção ao nível AAA das WCAG 2.1 nas partes que controla, o que
está acima do nível AA que essas leis exigem. No entanto, **o tema não foi auditado nem certificado formalmente**, e a conformidade é uma propriedade
de um site inteiro (plataforma, plugins e conteúdo), não de um tema. O Accessible oferece uma base sólida; ele não substitui
uma auditoria de acessibilidade do seu próprio site e dos seus cursos.

---

## 5. Opções pessoais de acessibilidade

Todo usuário, inclusive os visitantes que não fizeram login, tem uma **página de opções de acessibilidade**. Ela é acessada por:

- o **botão de acessibilidade** (o símbolo de acesso universal), sempre presente na barra superior de todas as páginas;
- o mesmo botão no canto superior direito da **página de login**;
- o **perfil** do usuário (link «Acessibilidade») e a página de **Preferências**.

Cada opção explica o que faz. Você pode salvar e voltar, salvar e ficar, cancelar ou restaurar os padrões do site.

### Fonte

Três fontes, todas incluídas no tema: **Lexend Deca** (a padrão), **Atkinson Hyperlegible** e **OpenDyslexic**.
Veja a [seção 10](#10-fontes-por-que-estas-três) para saber por que estas três.

### Tamanho do texto

**100%, 125%, 150% ou 200%.** A opção muda o tamanho da fonte raiz e, como todo tamanho do tema está em `rem`,
a página inteira cresce com ela: texto, ícones, botões, campos de formulário, caixas de seleção, painéis laterais, barras de rolagem e alvos de toque.
Isso é diferente do zoom do navegador, que também funciona: a opção de tamanho do texto mantém a largura da janela e deixa o layout
se reorganizar, por isso serve para quem quer texto maior sem perder o layout.

Em tamanhos maiores, o layout se adapta: a barra superior passa para duas linhas e, quando ocuparia mais de um quarto da
janela, se esconde ao rolar para baixo e volta no topo da página ou quando o foco entra nela. O menu principal passa
antes para o botão de menu (☰), para que a barra deixe espaço para a página. Os rótulos dos formulários ficam acima dos
campos, os menus quebram em várias linhas, os cartões de perfil viram uma só coluna, os menus longos recebem uma altura
máxima para continuarem na tela, a barra de Salvar e Cancelar dos formulários longos fica no final do formulário em vez
de cobri-lo, e as palavras longas nos títulos de seção dos formulários são hifenizadas em vez de fazer a página rolar
para o lado.

Em telas pequenas, o tamanho do texto tem um limite para que cada linha continue com palavras suficientes: até 150% em
telas com menos de 768 px (tablets pequenos) e até 125% abaixo de 480 px (celulares). Telas maiores recebem o tamanho
escolhido.

### Espaçamento do texto

- **Normal:** altura de linha 1,6.
- **Largo:** altura de linha 1,8, espaçamento um pouco maior entre letras e palavras.
- **Extra largo:** altura de linha 2, espaçamento entre letras de 0,12em, entre palavras de 0,16em e mais espaço após os parágrafos. Esses são
  os valores do [WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Um espaçamento maior ajuda muitos leitores com baixa visão ou dislexia a não se perderem na linha.

### Contraste

- **Normal:** texto preto sobre fundo branco, com o amarelo usado para passar o cursor e para o foco (o padrão).
- **Alto:** texto branco sobre fundo preto, com o amarelo reservado para passar o cursor e para o foco. Veja a
  [seção 8](#8-modo-de-alto-contraste).

### Movimento

- **Normal** ou **Reduzido.** O movimento reduzido desativa animações, transições e a rolagem suave. Se o sistema
  operacional estiver configurado para reduzir o movimento, o tema faz o mesmo, mesmo que a opção seja «Normal». Isso ajuda pessoas com
  distúrbios vestibulares e usuários de ampliadores, que podem se perder quando a página se mexe.

### Contorno de foco

- **Normal:** um anel de 4 px ao redor do elemento que tem o foco do teclado: preto com um halo branco, ou amarelo com um halo
  preto em alto contraste.
- **Grosso:** o anel passa a 8 px, mais fácil de encontrar sob um ampliador ou com baixa visão.

### Visão de cores

Um tipo (**protan**, **deutan**, **tritan** ou **sem cor**) e uma intensidade (**leve**, **média** ou **forte**). As
cores da página são deslocadas para que as cores que parecem iguais ao usuário passem a ser diferentes. Veja a
[seção 9](#9-filtros-de-visão-de-cores).

### Onde as escolhas são guardadas

- **Usuários com login:** como preferências de usuário do Moodle, para que acompanhem o usuário em qualquer computador.
- **Visitantes e convidados:** em um cookie (veja a [seção 12](#12-privacidade-e-dados)).
- **No primeiro login:** se a conta ainda não tiver opções próprias, as escolhas feitas como visitante são copiadas para
  a conta, e uma mensagem avisa isso. Se a conta já tiver opções próprias, prevalece a conta. Só são copiadas as escolhas feitas na mesma visita, logo antes de entrar: as opções deixadas no navegador por outra pessoa em um computador compartilhado, não.

### Mudar de tema

Se o site permitir que os usuários escolham seu tema, a mesma página tem um seletor de tema que lista todos os temas instalados.
Os usuários podem experimentar o Accessible e voltar atrás sem pedir nada a ninguém.

---

## 6. Design visual: o que todos os usuários veem

Estas mudanças se aplicam a todos que usam o tema, sejam quais forem suas opções.

### Cores e links

- Fundo branco em todo lugar, texto preto.
- Os links são pretos e sublinhados; o sublinhado fica mais grosso ao passar o cursor. Não há azul nem roxo, e os links visitados
  têm a mesma aparência, então nunca é preciso decifrar a cor de um link.
- O texto discreto (secundário) é um cinza escuro que ainda alcança 7:1, nunca os cinzas pálidos de um tema padrão.
- O código em linha é exibido em um magenta escuro que alcança 7:1 (o rosa do Bootstrap fica em cerca de 4,8:1).
- O texto que um autor justificou é exibido alinhado ao início da linha: o texto justificado cria espaços irregulares
  difíceis de ler para muitas pessoas com dislexia ou baixa visão.

### Foco

Todo elemento interativo mostra um anel preto de 4 px quando tem o foco do teclado (8 px com a opção grossa); os botões e
os campos de formulário também recebem um halo branco, que mantém o anel visível sobre qualquer fundo. Os botões, os itens de menu e os links
de paginação também se preenchem de amarelo, com texto preto, ao receber o foco e ao passar o cursor. Em alto contraste, o próprio anel é amarelo, com um
halo preto. O «brilho» azul-claro do Bootstrap é removido. A página também
deixa espaço no topo quando rola até um elemento com foco, de modo que a barra superior fixa nunca o cubra.

### Botões e alvos

- Todo botão tem um tamanho mínimo de **44 × 44 px** (o tamanho de alvo do nível AAA das WCAG) e um preenchimento generoso.
- As barras de paginação, como o filtro de iniciais de A a Z na página de participantes, têm alvos de 44 px com uma moldura de 2 px;
  o item atual é branco sobre preto e em negrito; ao passar o cursor, o preenchimento fica amarelo.
- Os controles desativados têm um preenchimento cinza **e** uma borda tracejada, para que não sejam indicados apenas pela cor.

### Formulários

- Campos de texto, menus suspensos, áreas de texto e botões têm todos **55 px** de altura.
- As caixas de seleção e os botões de opção são desenhados pelo tema: **28 px**, com uma borda preta de 2 px. Marcado significa preto com um
  visto ou ponto branco; desativado significa borda tracejada e preenchimento cinza.
- Os campos obrigatórios mantêm um asterisco claro, e as mensagens de validação só aparecem quando há um erro, emolduradas e
  junto ao campo.
- O interruptor do modo de edição na barra superior é uma trilha branca com um botão preto quando está desativado, e uma trilha preta com um botão branco
  quando está ativado, de modo que seu estado é indicado pela posição e pela forma, além da cor.

### Alertas e notificações

Os alertas do Moodle (erro, aviso, sucesso, informação) foram redesenhados para que seu significado nunca dependa da cor:

- um **fundo branco** (sem preenchimento tingido), para que o texto mantenha todo o contraste;
- uma **moldura colorida** na cor do alerta;
- uma **faixa com padrão** à esquerda, diferente para cada tipo;
- um **símbolo** junto à primeira linha de texto;
- o **tipo escrito em negrito** antes da mensagem: «Erro:», «Aviso:», «Sucesso:», «Informação:»;
- uma dica de ferramenta sobre a faixa e o símbolo com o tipo de alerta.

Uma pessoa que não vê nenhuma cor, ou que usa um leitor de tela, ainda recebe o tipo da mensagem. Os alertas escritos por
outros plugins com a marcação simples de alerta também recebem a moldura, o padrão e o símbolo (mas não a palavra escrita, que
vem dos modelos de alerta do próprio tema).

### Barras de rolagem

As barras de rolagem têm **24 px** de largura, com um indicador preto sobre uma trilha branca emoldurada, em todo lugar: página, painéis laterais e tabelas. Elas
não têm efeito ao passar o cursor nem ao arrastar, de propósito: uma barra de rolagem que muda de tamanho ou de cor sob o ponteiro dá saltos para
pessoas com tremor ou que usam um ampliador. A largura funciona no Chrome, no Edge e em outros navegadores baseados em Chromium; o Firefox mantém sua própria
largura, mas usa as cores.

### Cabeçalho e rodapé

- A barra superior mostra apenas o que importa e é preta com texto branco em todos os modos.
- O rodapé está sempre visível e é curto: os botões flutuantes de ajuda e comunicação, a linha «Você acessou como» e a
  versão do Moodle foram removidos. Os links adicionados por plugins (por exemplo, o resumo de retenção de dados)
  são mantidos.
- Os avatares de iniciais (os círculos coloridos com letras) ficam ocultos, exceto onde são o link para um perfil; as fotos
  dos usuários permanecem.

---

## 7. Leitores de tela e usuários de teclado

O Accessible foi verificado com a árvore de acessibilidade do navegador e com varreduras de teclado (veja a
[seção 14](#14-como-o-tema-foi-testado)). As mudanças são:

- **Link de salto primeiro.** «Ir para o conteúdo principal» é a primeira coisa em todas as páginas.
- **Opções de acessibilidade em segundo lugar.** O botão de acessibilidade é o item seguinte na ordem do teclado, de modo que o usuário possa
  chegar às suas opções com dois toques de tecla. (Ele é mostrado à direita da barra superior.)
- **Conteúdo principal antes dos blocos.** No Boost, a gaveta de blocos vem antes do conteúdo principal no código da página. No
  Accessible ela vem depois, de modo que o leitor de tela lê primeiro o conteúdo da página. O layout visual não muda.
- **Toda área de navegação tem um nome**: «Menu principal», «Menu da página», «Índice do curso» e os menus dentro das páginas, para que o usuário
  que lista os marcos de uma página saiba o que é cada um.
- **O campo de senha** tem um botão «Mostrar senha» que informa ao leitor de tela se a senha está visível
  (pressionado ou não pressionado).
- **Voltar ao topo.** Um botão aparece no canto inferior direito quando a página foi rolada cerca de uma tela. Ele leva o
  usuário de volta ao topo e coloca o foco no link de salto, de modo que os usuários de teclado e de leitor de tela realmente voltem ao
  início, e não apenas a página visual. Ele se oculta enquanto o foco está no conteúdo que fica por baixo dele, para nunca cobrir o elemento
  focado.
- **Botão «← Voltar ao curso»** no topo do índice do curso dentro de uma atividade, para voltar à página do curso.
- **O índice do curso abre e fecha no mesmo lugar.** No Boost, o botão que fecha o índice do curso fica na outra ponta
  do seu cabeçalho, longe do botão que o abre. No Accessible, ele aparece exatamente onde estava o botão de abrir, então
  a gaveta abre e fecha sem mover o ponteiro nem a visão ampliada, e é o primeiro item da gaveta para o teclado.

---

## 8. Modo de alto contraste

O alto contraste é uma opção pessoal (e pode ser o padrão do site). Ele transforma a página em **texto branco sobre fundo
preto**:

- O texto secundário é um cinza muito claro (#E0E0E0), ainda acima de 7:1 sobre o preto.
- Os links são brancos e sublinhados, como o texto.
- O **amarelo** (#FFE600) é usado apenas ao passar o cursor e para o foco: preenchimentos ao passar o cursor e o anel de foco, com texto preto sobre amarelo.
- Os alertas mantêm suas molduras, padrões e símbolos, em cores mais brilhantes que alcançam o nível de contraste sobre o preto.
- Os cartões, menus, diálogos e formulários do Moodle passam para escuro por meio do próprio modo escuro do Bootstrap, para que sejam coerentes.
- A barra superior mantém sua aparência habitual, e a área de edição do editor (TinyMCE) fica escura com um filtro.

O modo normal não é afetado: a paleta clara é exatamente a mesma com ou sem esta opção disponível.

O que o alto contraste não consegue mudar (H5P, iframes, conteúdo de docentes com cores próprias) está listado em
[Limites conhecidos](#15-limites-conhecidos).

---

## 9. Filtros de visão de cores

### O que eles fazem

A deficiência de visão de cores significa que algumas cores que parecem diferentes para a maioria das pessoas parecem iguais para o usuário, na maior
parte das vezes vermelhos e verdes. A opção de visão de cores aplica um filtro sobre toda a janela que **move as cores que o usuário
não consegue distinguir para cores que ele consegue**, de modo que as diferenças voltam a ser visíveis.

### As opções

- **Tipo:**
  - **Protan:** sensibilidade fraca ou ausente ao vermelho.
  - **Deutan:** sensibilidade fraca ou ausente ao verde.
  - **Tritan:** sensibilidade fraca ou ausente ao azul.
  - **Sem cor:** a página é exibida em tons de cinza.
- **Intensidade:** **leve** (os tipos «-anomalia», em que o cone funciona parcialmente), **média** ou **forte** (os tipos
  «-anopia», em que o cone está ausente). A visão sem cor ignora a intensidade.

Se o usuário não sabe qual é o seu tipo, pode experimentar cada um e ficar com aquele em que as coisas vermelhas, verdes e azuis pareçam mais
diferentes. É uma ajuda, não um teste médico.

### Como funciona

Cada filtro é uma matriz de cores SVG aplicada por meio de uma camada sobre toda a janela, construída em duas etapas:

1. **Simulação:** o que uma pessoa com essa deficiência vê, usando o [modelo publicado](https://doi.org/10.1109/TVCG.2009.113) de Machado, Oliveira e
   Fernandes (2009), escalado pela intensidade escolhida.
2. **Correção:** a parte da cor que o usuário não consegue ver é movida para os canais que ele ainda consegue ver (o vermelho para o
   verde e o azul no protan e no deutan; o azul para o vermelho e o verde no tritan). Essa técnica é conhecida como
   «daltonização».

**Branco, cinza e preto não mudam**, de modo que o texto e os fundos mantêm seu contraste.

### Como foi verificado

Amostras coloridas foram desenhadas sobre uma página com cada combinação de tipo e intensidade, e as cores dos seus pixels foram
lidas de volta. Branco, preto e cinza não mudaram em nenhum caso; cada intensidade deslocou as cores mais do que a
anterior; a visão sem cor transformou cada amostra em um cinza puro.

### Limites

- As matrizes vêm de valores publicados. Elas **não foram validadas clinicamente**, e somente pessoas com deficiência de visão de
  cores podem confirmar que ajudam. Recomenda-se testar com usuários reais em conteúdo de cursos reais.
- As imagens e os vídeos também são filtrados, porque o filtro cobre toda a janela. Isso inclui H5P e conteúdos
  incorporados de terceiros, como YouTube e Vimeo, no Chrome, no Edge e no Firefox. Em um navegador que não consegue aplicar a camada, o filtro é
  aplicado à página e os conteúdos incorporados de terceiros mantêm suas próprias cores.
- O **vídeo em tela cheia** e os diálogos modais nativos são desenhados pelo navegador acima de tudo e não são filtrados. Os
  filtros de cor do sistema operacional (Windows, macOS, iOS e Android) os cobrem.
- O efeito de um filtro sobre toda a janela na velocidade de computadores lentos não foi medido.

### Teste de visão de cores para administradores

A aba **Informações** das configurações do tema mostra a mesma imagem de teste onze vezes: a original, a visão sem cor
e cada tipo em cada intensidade. Os administradores podem ver como as cores do site aparecem para cada usuário. A imagem é um desenho
do próprio tema, não uma placa de Ishihara, e não é um teste médico.

---

## 10. Fontes: por que estas três

### Por que oferecer uma escolha

Nenhuma fonte é a melhor para todos. O conforto de leitura depende da pessoa, dos seus olhos e da tarefa. Por isso o tema
inclui três fontes com objetivos de design diferentes, deixa cada usuário experimentá-las e ficar com a que funciona, e
permite que o administrador escolha o padrão do site.

As três são incluídas no tema como arquivos de fonte web: **nenhuma requisição é enviada ao Google Fonts nem a qualquer outro serviço
externo**, o que é melhor para a privacidade e funciona em redes sem acesso à internet. As três têm licença
**SIL Open Font License 1.1**. A aba Informações das configurações do tema mostra uma amostra de cada fonte, em normal e
em negrito, incluindo os caracteres mais fáceis de confundir: `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Fonte | Criada por | Ideia principal |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (padrão) | Dra. Bonnie Shaver-Troup e Thomas Jockin | Espaçamento largo e uniforme entre letras para tornar a leitura mais fluida |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, desenhada com a Applied Design Works | Formas de letras fáceis de distinguir, para baixa visão |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Base das letras mais pesada, pensada para ajudar leitores com dislexia |

### Lexend Deca (a padrão)

**História.** A Lexend é obra da Dra. Bonnie Shaver-Troup, terapeuta educacional, e do designer de tipos Thomas
Jockin. A partir do seu trabalho com leitores com dificuldades, ela propôs que a leitura melhora com uma fonte sem serifa, proporções
expandidas e maior espaçamento entre caracteres. Eles a desenvolveram por volta de 2018 e ela foi lançada no
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) em 2019. A Lexend se baseia na [Quicksand](https://fonts.google.com/specimen/Quicksand), uma fonte iniciada por Andrew
Paglinawan em 2008. A família tem sete larguras, da **Deca** (a mais estreita) à Zetta (a mais larga); em 2021 foi acrescentado um eixo
de peso.

**Por que é a padrão.** A Lexend Deca é uma fonte sem serifa limpa e aberta, com espaçamento generoso, que continua compacta o suficiente para
uma interface densa como a do Moodle, e é lida bem em tamanhos pequenos e grandes.

### Atkinson Hyperlegible

**História.** A Atkinson Hyperlegible foi criada para o **Braille Institute of America** e lançada em 2019, o ano
do centenário do instituto. Foi desenhada pela agência Applied Design Works como parte da nova marca do instituto,
e recebe o nome do fundador do instituto, J. Robert Atkinson. Ganhou o prêmio Innovation by Design da Fast Company em 2019
e, em 2024, entrou para a coleção permanente do Cooper Hewitt, Smithsonian Design Museum. Em 2025, o Braille
Institute lançou a **Atkinson Hyperlegible Next**, com mais pesos e maior suporte a idiomas, e uma versão
monoespaçada.

**A ideia.** A maioria das fontes busca letras uniformes. A Atkinson Hyperlegible faz o contrário: dá prioridade às
**diferenças entre os caracteres** para que leitores com baixa visão possam distingui-los, com formas abertas e
desenhos distintos para pares fáceis de confundir, como o I maiúsculo, o l minúsculo e o número 1, ou o O e o 0.

**Por que é oferecida.** É a fonte desenhada de forma mais direta para os usuários com baixa visão a quem este tema atende. O tema
inclui a versão original em normal e em negrito.

### OpenDyslexic

**História.** A OpenDyslexic foi criada por Abbie Gonzalez, que tem dislexia, e foi lançada pela primeira vez em 2011. É de código
aberto e foi originalmente derivada da Bitstream Vera Sans.

**A ideia.** Suas letras têm a **base mais pesada**. A autora diz que o peso mostra para onde fica o «embaixo», o que
ajuda os leitores a reconhecerem as letras e pode evitar que as invertam ou girem mentalmente (por exemplo b, d, p e q).
As formas das letras também são mais distintas, e o espaçamento é maior.

### O que as fontes cobrem

A Lexend Deca e a Atkinson Hyperlegible são incluídas com os conjuntos de caracteres latino e latino estendido, os
mesmos arquivos que o Google Fonts fornece, que cobrem os sete idiomas do tema e a maioria dos idiomas europeus; essas
duas fontes não têm caracteres gregos nem cirílicos. A OpenDyslexic é incluída completa, tal como a sua autora a
publica: além do latino, cobre o grego, o cirílico e o alfabeto fonético internacional. Os caracteres que uma fonte não
tem (por exemplo o árabe ou as escritas asiáticas, ou o grego e o cirílico na Lexend Deca e na Atkinson Hyperlegible)
são exibidos na fonte sem serifa do sistema.

---

## 11. Recursos para administradores

### Configurações do tema

- Aba **Padrões dos usuários**: a fonte, o tamanho do texto, o espaçamento, o contraste, o movimento e o foco padrão para todo o site,
  incluindo visitantes e a página de login. A escolha do próprio usuário sempre prevalece sobre o padrão. (A visão de cores não tem padrão
  do site, porque é pessoal.)
- Aba **Informações** (a última aba):
  - a versão do tema, lida das informações do plugin;
  - um botão **Documentação**, no topo, que abre este guia em uma nova aba, no idioma do usuário quando o
    guia foi traduzido para ele e em inglês caso contrário. A página também oferece o guia como um arquivo Markdown para
    baixar. Somente os administradores podem abri-la;
  - um **resumo para suporte** com linhas de texto simples (versões do tema, do Moodle, do PHP, do banco de dados e do servidor web, tema em uso,
    idioma e as próprias opções de acessibilidade do administrador). O navegador acrescenta o tamanho da janela, a proporção de pixels, o tamanho
    da fonte raiz e suas configurações de movimento reduzido, contraste e cores forçadas. Um botão **Copiar informações** copia tudo para a
    área de transferência para um relatório de erro. O resumo nunca contém o endereço do site, caminhos de arquivos nem dados pessoais;
  - links para a página de opções de acessibilidade e para a aba Padrões dos usuários;
  - o **teste de visão de cores** (veja a [seção 9](#9-filtros-de-visão-de-cores));
  - um exemplo dos quatro tipos de **alerta** (sucesso, informação, aviso e erro), como os usuários os veem com as opções atuais (veja a [seção 6](#6-design-visual-o-que-todos-os-usuários-veem)). Os leitores de tela os leem como texto normal, não como alertas;
  - as **amostras de fontes** (veja a [seção 10](#10-fontes-por-que-estas-três));
  - as **licenças** do tema e das fontes, com um link para o texto oficial e para a cópia incluída no
    tema.

### Favicon

O tema traz o seu próprio favicon (o pequeno ícone na aba do navegador), `pix/favicon.ico`. Para usar o seu, envie-o em *Administração do site > Aparência > Logos* (**Favicon**): o Moodle passa a mostrá-lo no lugar do favicon do tema. Você também pode substituir o arquivo `pix/favicon.ico`, mas a próxima atualização do tema traz o original de volta.

### Tema do site ou escolha do usuário

- **Como tema do site:** todos recebem o Accessible, com os padrões do site que você definir.
- **Como uma escolha:** mantenha o tema habitual do site e ative **Permitir temas de usuários**. Cada usuário poderá então escolher o Accessible
  (e voltar atrás) na sua página de opções de acessibilidade, e todos os demais mantêm a aparência habitual.

### Um link de login que abre o Accessible

Quando o Accessible é uma escolha do usuário e não o tema do site, a página de login que as pessoas acessam pelo
endereço do site usa o tema do site. Um usuário que depende do Accessible precisa entrar por uma página que pode ser
difícil de usar para ele.

Se **Permitir mudanças de tema na URL** estiver ativado (`allowthemechangeonurl`), você pode dar a esses usuários um
link de login que abre o Accessible diretamente: `https://your.site/login/index.php?theme=accessible`. O tema fica
guardado na sessão, então continua após o login e, até o usuário sair, tem prioridade sobre o tema escolhido no perfil
dele.

Contrapartida: a configuração precisa continuar ativada para o link funcionar e, enquanto estiver ativada, qualquer
pessoa pode mudar o tema da própria sessão com o parâmetro. Ninguém pode mudá-lo para outras pessoas.

### Avisos quando os usuários não podem usar suas opções

Se **Permitir temas de usuários** estiver desativado, os usuários não podem escolher o tema por conta própria. O tema avisa sobre isso em dois lugares:

- um alerta na página de avisos da administração, com um link para a configuração;
- uma checagem em **Relatórios > Status do sistema** (a página de status do sistema do Moodle).

---

## 12. Privacidade e dados

- **Usuários com login:** cada opção é guardada como uma preferência de usuário do Moodle (`theme_accessible_font`,
  `theme_accessible_fontsize` e assim por diante). Elas são declaradas no provedor da **Privacy API** do tema e incluídas
  na exportação dos dados do usuário.
- **Visitantes e convidados:** as escolhas são guardadas em um cookie chamado `MoodleAccessible` seguido do nome do cookie de sessão
  do site. Ele contém apenas as opções de exibição (em JSON), é `HttpOnly` e `SameSite=Lax`, dura um ano e é
  verificado em relação à lista de valores válidos toda vez que é lido. Quando as opções são salvas por um usuário com login, o cookie
  as espelha para que a página de login mostre a última escolha. O cookie é apagado quando o usuário sai, assim em um computador compartilhado a próxima pessoa não vê nem herda essas opções. Um visitante que nunca entra mantém o cookie, então em computadores públicos (bibliotecas, salas de aula) configure o navegador para apagar os dados ao sair ou para abrir janelas de convidado ou privadas; caso contrário, a próxima pessoa verá a página com essas opções até mudá-las. **Mencione este cookie na política de privacidade e de cookies do seu site.**
- **Página de opções sem login:** a página de opções de acessibilidade abre sem sessão mesmo quando **Forçar usuários a autenticar** está ativado, para que as pessoas possam ajustar a página antes de entrar. Os visitantes veem apenas o formulário de opções, com o layout da página de login (sem blocos, menus ou navegação), e suas escolhas vão apenas para o cookie do seu próprio navegador.
- **Nenhuma requisição externa:** fontes, ícones e filtros são todos servidos pelo seu próprio site.
- **Nenhum rastreamento:** o tema não coleta dados de uso.

---

## 13. Idiomas

Os textos do tema estão disponíveis em **sete idiomas**: inglês, espanhol, catalão, francês, italiano, alemão e
português do Brasil. As traduções estão disponíveis nos pacotes de idiomas do Moodle: quando um site tem instalado o
pacote de um idioma, o tema aparece nesse idioma. Os textos e as traduções foram escritos com IA (Claude). Os textos em
inglês, espanhol e catalão foram revisados por pessoas. Este guia está disponível nos mesmos idiomas.

---

## 14. Como o tema foi testado

As afirmações de acessibilidade valem apenas pelo que foi verificado. Isto é o que foi verificado e como.

### Varreduras automáticas

Três scripts que usam o Playwright (uma ferramenta de automação de navegador) foram executados no Moodle 5.2 e no Moodle 5.3,
no **Chromium** e no **Firefox**:

- Uma **varredura completa** de 27 páginas (painel, curso, atividades, fóruns, questionário e tentativa de questionário, participantes,
  livro de notas, calendário, administração, formulários, login...) nos tamanhos de texto **100%, 125% e 200%**, em **contraste normal e alto**.
  Ela verifica o contraste de cada trecho de texto visível em relação ao seu fundo real (7:1, ou 4,5:1 para texto
  grande), nomes acessíveis, marcos, ids duplicados, ordem dos títulos e tamanho dos alvos.
- Uma **varredura de teclado**: ordem de tabulação, armadilhas de foco, indicador de foco visível e foco escondido atrás de elementos fixos.
- Uma **varredura de contraste** de uma lista mais curta de páginas, usada após cada mudança de estilo.

**Resultado:** nenhuma falha de contraste em nenhuma página, tamanho, modo ou navegador. As varreduras no
Moodle 5.2 e no Moodle 5.3 não encontraram nenhuma nos tamanhos de texto 100%, 125% e 200%, em contraste normal ou alto. Os demais achados
estão listados em [Limites conhecidos](#15-limites-conhecidos).

Os filtros de visão de cores foram verificados lendo de volta as cores dos pixels (veja a [seção 9](#9-filtros-de-visão-de-cores)).

### Testes automatizados

O tema inclui testes PHPUnit (preferências, padrões e validação do cookie, hooks, checagem de status, provedor de privacidade,
o resumo para suporte, compilação do SCSS) e cenários Behat (a página de opções para
usuários e visitantes, o aviso da administração, a aba Informações).

Eles foram executados nas duas versões:

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 testes, 332 asserções) | todos passaram | todos passaram |
| Behat (17 cenários, 124 passos) | todos passaram | **15 passaram, 2 falharam** |

Os dois cenários Behat que falham no Moodle 5.3 são os do aviso da administração. Eles falham no passo que
abre *Relatórios > Status do sistema* pela barra de navegação superior, e não no que verificam. O Moodle 5.3 desenha essa barra com um
novo componente e o tema ainda usa a marcação clássica (veja [Limites conhecidos](#15-limites-conhecidos)). As páginas e
as opções funcionam; apenas o passo do teste não encontra a barra.

### Verificações de código

- **As verificações de plugins do Moodle** (moodle-plugin-ci 4.5), executadas no Moodle 5.2 e novamente no 5.3: validação do plugin, lint de PHP,
  PHPDoc, savepoints de atualização, modelos Mustache (renderização e validação de HTML), tudo sem erros nem avisos.
- **Estilo de código:** o `phpcs` com o padrão do Moodle está limpo; o ESLint não relata erros nem avisos em
  `javascript/accessible.js`; o stylelint não relata nenhum no SCSS, com um punhado de exceções documentadas
  (`!important` é deliberado, para superar os estilos do Boost).
- **As refatorações de estilo** são comprovadas como inofensivas com uma ferramenta de comparação: ela compara os estilos calculados de bem mais de 100.000
  elementos antes e depois de uma mudança, e verifica que nenhum par de regras concorrentes mudou de ordem.

### WAVE

As páginas principais foram verificadas com a extensão [WAVE](https://wave.webaim.org/) da WebAIM, no Chrome. Todas elas obtêm
10 de 10 na pontuação AIM automática do WAVE. A pontuação AIM compara uma página com outras páginas da web; como a própria WebAIM diz, uma
pontuação alta não prova que uma página seja acessível ou conforme, e por isso o tema também foi testado manualmente.

### O que não foi feito

- **Leitores de tela:** o tema foi testado manualmente com o NVDA. Ainda não foi testado com JAWS, VoiceOver nem
  TalkBack. A estrutura da página também foi verificada pela árvore de acessibilidade do navegador, que é o que os leitores de tela
  leem.
- **Os testes de navegador não cobriram o Safari**, e no Moodle 5.3 dois cenários Behat falham (veja acima).
- **O reprodutor de vídeo foi verificado no Chromium e no Firefox sem janela**, não manualmente em uma janela normal do Chrome ou do
  Firefox, e não com todo tipo de conteúdo (arquivos de vídeo locais, só áudio, legendas, transmissões ao vivo).
- **Nenhum teste com usuários** cegos, com baixa visão ou com deficiência de visão de cores.
- **Apenas auditorias internas;** nenhuma auditoria externa nem certificação.

O retorno de usuários e especialistas em acessibilidade é a contribuição mais valiosa que o projeto pode receber.

---

## 15. Limites conhecidos

### Conteúdo que o tema não controla

- As **atividades H5P** e outros **iframes incorporados** (vídeos, ferramentas externas, LTI, documentos incorporados) têm sua própria
  página e seus próprios estilos. O tema não pode mudar suas cores, então o alto contraste não chega a eles. O filtro de visão de cores
  os cobre, com as exceções listadas na [seção 9](#9-filtros-de-visão-de-cores).
- O **texto colorido manualmente** no conteúdo dos cursos (cores definidas no editor, texto colado do Word ou da web) mantém suas
  cores, porque as cores em linha prevalecem sobre o tema. Um docente que define texto escuro sobre um preenchimento claro o mantém, mesmo em alto
  contraste. Os docentes devem deixar a cor do texto por conta do tema.
- As **imagens** mantêm seus pixels: o texto dentro de uma imagem não é ampliado, e o alto contraste não o recolore (só o
  filtro de visão de cores desloca suas cores, como faz com toda a janela). As imagens precisam de uma alternativa em texto.
- **A área de edição do editor** (TinyMCE) é um documento separado. Em alto contraste, ela é escurecida com um filtro, o que
  mantém as cores aproximadamente corretas, mas muda a aparência das imagens durante a edição. O conteúdo salvo não é alterado.

### Limites do próprio Moodle

- Algumas páginas do núcleo pulam níveis de títulos (por exemplo de h1 para h3 ou h4), e alguns iframes do H5P, do TinyMCE e
  das páginas de administração não têm título. Isso vem da marcação do próprio Moodle.
- No tamanho de texto de 200%, o livro de notas e a página de tentativa de questionário ainda podem rolar para o lado,
  por design do Moodle.
- No tamanho de texto de 200%, a página de gerenciamento de cursos pode rolar para o lado, ainda mais com os painéis
  laterais abertos.

### Moodle 5.3

O Moodle 5.3 desenha as barras de navegação primária e secundária com um novo componente (`core/nav`) e o interruptor do modo de edição
com o Switch do sistema de design. O tema ainda usa a marcação clássica do Moodle 5.2 para eles. Funciona e é
acessível, mas ainda não usa os novos componentes do Moodle, e os testes que navegam pela barra superior com o
passo padrão do Behat («I select ... from primary navigation») falham com este tema no 5.3. Isso está planejado para uma próxima
versão do tema.

### Tamanho dos alvos

Os links da trilha de navegação, as ações das mensagens do fórum (Link permanente, Editar, Responder), os links para a atividade anterior e a seguinte e os links do
índice do curso têm de 31 a 34 px de altura, abaixo dos 44 px do nível AAA das WCAG. Torná-los maiores deixaria essas listas muito mais longas;
isso ainda está sendo avaliado.

### Navegadores

- As barras de rolagem largas funcionam nos navegadores baseados em Chromium (Chrome, Edge, Opera, Brave). O Firefox mantém sua própria largura.
- O tema foi testado no Chromium e no Firefox. O Safari não foi testado.

---

## 16. O Accessible é adequado para o seu site?

### Escolha o Accessible quando

- Seu site tem, ou pode vir a ter, **estudantes, docentes ou funcionários cegos, com baixa visão ou com deficiência de visão de
  cores**, e você quer que eles trabalhem com autonomia.
- Você tem **obrigações de acessibilidade** e quer uma plataforma construída em direção às WCAG, a norma por trás da maioria das leis de
  acessibilidade.
- Você quer **oferecer uma aparência alternativa** ao lado do seu tema principal, para que quem precisar possa trocar.
- Você quer um **Moodle calmo e legível** para todos: sem poluição visual, com contraste forte e layout previsível.

### Pense duas vezes quando

- Você precisa de **uma marca forte**, cores personalizadas, imagens de fundo ou uma identidade visual: a aparência do Accessible é
  deliberadamente simples, e suas cores são fixas por causa do contraste.
- Seus cursos dependem principalmente de **H5P ou de ferramentas externas**: o tema não pode mudar o estilo do que roda dentro deles, então essas partes
  mantêm suas próprias cores e tamanhos.

### Experimente sem risco

Instale-o e ative **Permitir mudanças de tema na URL** (*Administração do site > Aparência > Configurações avançadas de tema*,
configuração `allowthemechangeonurl`). Depois, abra seu site com `?theme=accessible` acrescentado ao endereço (por exemplo
`https://your.site/my/?theme=accessible`): o tema se aplica apenas à sua sessão. Experimente as opções, abra seus cursos a
200% e em alto contraste e depois **desative a configuração novamente**, porque, enquanto ela estiver ativada, qualquer pessoa que conheça o parâmetro
pode mudar o tema.
Se você quiser manter um link de login que abre o Accessible, veja
[Um link de login que abre o Accessible](#um-link-de-login-que-abre-o-accessible): nesse caso, a configuração continua ativada.

---

## 17. Instalação e configuração

### Requisitos

- **Moodle 5.2 e posteriores.**
- O tema **Boost**, que vem com o Moodle.
- Nenhum outro plugin. Nenhuma ferramenta de compilação.

### Instalação

1. Copie a pasta do tema para `public/theme/accessible` do código do seu Moodle (a pasta deve se chamar `accessible`; se você
   baixar o ZIP do GitHub, renomeie a pasta antes), ou envie o arquivo ZIP em
   *Administração do site > Plugins > Instalar plugins*.
2. Vá a *Administração do site > Notificações* para concluir a instalação.
3. Limpe os caches se você atualizar o tema manualmente.

### Configuração

- **Como tema do site:** *Administração do site > Aparência > Temas*, e então escolha o Accessible.
- **Como escolha do usuário:** ative **Permitir temas de usuários** em *Administração do site > Aparência > Configurações avançadas de tema*.
- **Padrões:** nas configurações do tema, aba **Padrões dos usuários**, escolha a fonte, o tamanho do texto, o espaçamento, o contraste, o movimento e o
  foco do site.
- **Privacidade:** acrescente o cookie de visitante à sua política de privacidade ou de cookies (veja a [seção 12](#12-privacidade-e-dados)).

### Atualização

Instale a nova versão sobre a antiga e visite *Administração do site > Notificações*. Os usuários mantêm suas opções.

---

## 18. Créditos, licenças e fontes

### Créditos

Por **Fernando Acedo** e pela antiga **equipe de desenvolvimento da Koditik**. O Claude Code ajudou a escrever partes do tema, o revisou e ajudou a
testá-lo. Claude é uma marca registrada da Anthropic, PBC.

[Código-fonte e versões](https://github.com/f-acedo/moodle-theme_accessible). Relatos de erros e sugestões: [rastreador de problemas](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Licenças

- Tema Accessible: **GNU General Public License v3 ou posterior** ([texto oficial](https://www.gnu.org/licenses/gpl-3.0.html); cópia em `LICENSE.txt`).
- Fontes do Accessible: **SIL Open Font License 1.1** ([texto oficial](https://openfontlicense.org/open-font-license-official-text/); cópias em `fonts/LICENSE-*.txt`).
  - Lexend Deca: Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible: Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic: Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Fontes

Normas e leis:

- [Web Content Accessibility Guidelines (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: conformance levels](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Diretiva de Acessibilidade da Web (UE) 2016/2102](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [Ato Europeu de Acessibilidade, Diretiva (UE) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Normas da Seção 508](https://www.access-board.gov/ict/), US Access Board.
- [Norma web do Título II da ADA (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), Departamento de Justiça dos EUA.

Usuários:

- [World report on vision](https://www.who.int/publications/i/item/9789241516570), Organização Mundial da Saúde, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Fontes tipográficas:

- [Lexend](https://www.lexend.com/) e [Lexend no GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) e
  [OpenDyslexic na Wikipédia](https://en.wikipedia.org/wiki/OpenDyslexic).

Visão de cores:

- Machado, G. M., Oliveira, M. M. e Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of
  color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Apêndice A. Referência técnica

Para especialistas que querem os detalhes antes de instalar o tema: como os filtros de visão de cores são construídos e o que as
verificações mostraram, até onde foram as verificações de alto contraste, e de onde vêm as fontes incluídas e o que a pesquisa diz
sobre elas. As seções 8, 9, 10 e 15 trazem as mesmas informações em termos simples.

### A.1 Filtros de visão de cores: implementação e verificações

Opção do usuário em `/theme/accessible/preferences.php`: **Visão de cores** (tipo) e **Intensidade**.

#### Como funciona

- Tipos: nenhum, protan (fraqueza ou cegueira para o vermelho), deutan (fraqueza ou cegueira para o verde), tritan (fraqueza ou cegueira para o azul) e mono (sem cor, apenas cinzas).
- Intensidade: leve (os tipos «-anomalia»), média, forte (os tipos «-anopia»). O mono a ignora.
- A escolha é guardada como as preferências de usuário `theme_accessible_colortype` e `theme_accessible_colorstrength`
  (`classes/preferences.php`) e chega à página como classes do body: `accessible-colortype-X` e
  `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` contém nove filtros SVG (3 tipos x 3 intensidades) e o mono. Ele é incluído em
  `templates/drawers.mustache`. O CSS (final de `scss/styles.scss`) aplica o filtro correspondente por meio de uma camada.
- A camada é `body::after`: uma caixa fixa que cobre a janela, com `pointer-events: none` e
  `backdrop-filter: url(#accessible-colortype-X-Y)`. Ela recolore tudo o que é desenhado abaixo dela: a página, as imagens, os elementos de
  vídeo, o H5P e os **conteúdos incorporados de terceiros** (YouTube, Vimeo, LTI). Não acrescenta marcação, os cliques a atravessam, não tem
  conteúdo para tecnologias assistivas e fica oculta na impressão.
- Por que não um filtro na própria página: um filtro em `<html>` não alcança iframes de origem cruzada no Chromium (um quadro pausado do
  YouTube saiu idêntico com e sem ele), e um filtro em `<body>` o tornaria o bloco contêiner da barra de navegação e
  dos painéis laterais fixos e quebraria sua posição.
- Onde o navegador não pode usar `url()` em `backdrop-filter`, aplica-se a regra antiga (`filter` em `<html>`). Nesse caso,
  os conteúdos incorporados de terceiros mantêm suas próprias cores.
- O que a camada não recolore, porque o navegador a desenha acima de tudo: o **vídeo em tela cheia** e os modais nativos de
  `<dialog>` abertos com `showModal()`. Os modais do próprio Moodle são elementos normais e ficam cobertos. As capturas de tela
  feitas por ferramentas do navegador (não pelo sistema operacional) também podem deixar o efeito de fora.

#### As matrizes

Cada filtro é uma matriz `feColorMatrix` 3x3 (aplicada em RGB linear, o padrão do SVG):

1. Simulação do cone ausente: a matriz de Machado et al. (2009) para dicromacia completa, escalada pela intensidade
   `S = (1 - s) * I + s * M`, com s = 0,4 (leve), 0,7 (média), 1,0 (forte).
2. Correção (o passo usual de «daltonização»): a parte da cor que o usuário não consegue ver, `I - S`, é movida para os
   canais que ele ainda consegue ver: o erro do vermelho para o verde e o azul no protan e no deutan, o erro do azul para o vermelho e o verde no
   tritan. Resultado: `C = I + shift * (I - S)`.

Cada linha de `C` soma 1, de modo que branco, cinza e preto não mudam. As matrizes foram calculadas à mão (não há
etapa de compilação); recalcule-as se a matemática mudar.

As matrizes vêm de valores publicados, não de uma validação clínica. Trate o filtro como uma ajuda, não como uma ferramenta
médica.

#### Teste

Oito amostras (branco, preto, cinza, vermelho, verde, azul, amarelo, laranja-avermelhado) foram desenhadas sobre o painel para cada
combinação e seus pixels lidos a partir de uma captura de tela. Os valores são RGB.

| Tipo | Resultado |
|---|---|
| Nenhum | Sem mudança: vermelho (255,0,0), verde (0,255,0), azul (0,0,255) |
| Protan | O vermelho vira rosa: leve (255,121,134), média (255,157,173), forte (255,184,203). O verde fica mais escuro. |
| Deutan | O vermelho vira rosa-magenta: leve (255,72,118), média (255,95,153), forte (255,112,180). |
| Tritan | O azul vira roxo claro: leve (141,103,255), média (182,134,255), forte (213,158,255). O amarelo se desloca para o verde. |
| Mono | Todas as amostras cinza (R = G = B), por exemplo vermelho (127,127,127), verde (220,220,220), azul (76,76,76). |

- Branco (255,255,255), preto (0,0,0) e cinza (128,128,128) não mudaram em nenhuma combinação.
- Cada nível de intensidade move as cores mais do que o anterior.
- Os deslocamentos fazem com que cores que parecem iguais ao usuário difiram em luminosidade ou matiz.

#### O que não foi feito

- Nenhuma validação clínica das matrizes.
- Nenhuma exceção por cor: as imagens e os vídeos também são filtrados.
- O vídeo em tela cheia e os diálogos modais nativos não são filtrados (veja acima). Os filtros de cor do próprio sistema operacional
  (Windows, macOS, iOS, Android) os cobrem.
- O desempenho em máquinas fracas (uma camada sobre toda a janela) não foi medido. Em um teste em computador de mesa, a taxa de rolagem foi
  de cerca de 54 quadros por segundo com a camada, 59 com o filtro antigo e 61 sem nenhuma opção de cor.

### A.2 Alto contraste: alcance das verificações

O que o alto contraste não consegue mudar está listado na [seção 15](#15-limites-conhecidos).

O contraste foi verificado com uma varredura automática (texto a 7:1, texto grande a 4,5:1) nos tamanhos de texto 100%, 125% e 200%,
com o filtro de visão de cores ativado, em modais, e nas páginas do painel, do curso, do calendário, de participantes, do questionário e da
tentativa de questionário.

### A.3 Fontes: história e pesquisa

O tema Accessible inclui três fontes e deixa cada usuário escolher uma: **Lexend Deca** (a padrão), **Atkinson
Hyperlegible** e **OpenDyslexic**. Esta parte conta de onde vem cada uma, o que seus designers queriam alcançar,
o que diz a pesquisa e por que fontes como estas são oferecidas em sites para pessoas com baixa visão ou dislexia. As três
são incluídas no tema (sem requisições a um serviço externo de fontes) e têm licença SIL Open Font License 1.1.

#### O que torna uma fonte mais fácil de ler

Nenhuma fonte torna a leitura fácil para todos, e a pesquisa sobre «fontes acessíveis» é menor e mais ambígua do que o
marketing em torno dela. Estas são as ideias de design que aparecem várias vezes, com o que se sabe sobre cada uma:

- **Letras que não podem ser confundidas.** Muitas fontes desenham o **I** maiúsculo, o **l** minúsculo e o número **1** quase
  iguais, e o mesmo acontece com **O** e **0**, **B** e **8**, ou **rn** e **m**. Um leitor com baixa visão, que
  vê as formas borradas ou ampliadas, não pode usar o contexto para adivinhar. Desenhar esses caracteres de forma diferente é a
  ideia principal da Atkinson Hyperlegible.
- **Formas abertas.** As aberturas largas em letras como **a**, **c**, **e** e **s** continuam legíveis quando a imagem está borrada
  ou ampliada.
- **Espaçamento generoso.** Letras muito próximas interferem entre si, um efeito chamado *crowding* (aglomeração). Em um
  estudo de 2012 com 74 crianças disléxicas de 8 a 14 anos (Zorzi e colegas, publicado na PNAS), o espaçamento extragrande entre letras
  tornou a leitura cerca de 20% mais rápida e reduziu os erros pela metade, enquanto o espaçamento extra entre linhas, isoladamente, não teve efeito. O espaçamento largo é
  também o ponto de partida da Lexend, e o tema o oferece como uma opção separada, à parte da fonte.
- **Letras sem serifa e verticais.** As orientações para a dislexia, como o guia de estilo da British Dyslexia Association,
  costumam recomendar fontes simples sem serifa, e um estudo com rastreamento ocular de 48 leitores disléxicos (Rello e Baeza-Yates,
  2013) concluiu que as fontes sem serifa, monoespaçadas e romanas (não itálicas) tiveram melhor desempenho do que as com serifa, proporcionais e
  itálicas. Revisões posteriores são mais cautelosas: a Dyslexia Scotland relata que não há vantagem consistente das fontes sem serifa sobre as com
  serifa, e diz que o espaçamento é um fator mais forte do que as formas das letras.
- **A preferência conta.** Os leitores costumam ler melhor na fonte a que estão acostumados e de que gostam. Por isso o tema oferece uma
  escolha em vez de uma fonte prescrita.

A fonte é apenas uma parte da legibilidade. O tamanho, o espaçamento, o contraste e a liberdade de alterá-los importam pelo menos tanto, e
o tema tem uma opção para cada um (veja a página de opções e as seções 5 e 8 do guia).

#### Lexend Deca (a padrão)

**História.** A Lexend é obra da Dra. Bonnie Shaver-Troup, terapeuta educacional, e do designer de tipos Thomas
Jockin. Eles a desenvolveram por volta de 2018 a partir do trabalho dela com leitores com dificuldades, e ela foi lançada no
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) em 2019. Baseia-se na
[Quicksand](https://fonts.google.com/specimen/Quicksand), uma fonte iniciada por Andrew Paglinawan em 2008. A família tem
sete larguras, da **Deca** (a mais estreita) à Zetta (a mais larga), para que o espaçamento entre letras possa ser alterado sem
mudar a fonte. Desde junho de 2021, todas as fontes são variáveis, com um eixo de peso.

**A ideia.** Espaçamento largo e uniforme entre letras e formas simples e abertas, para tornar a leitura mais fluida. O Moodle é uma
interface densa, por isso o tema usa a **Deca**, que mantém o espaçamento generoso mas continua compacta o suficiente para menus e formulários.

**O que a evidência diz.** Os designers relatam melhor velocidade de leitura em seus próprios testes. O estudo mais conhecido é pequeno
(20 alunos do terceiro ano lendo durante um minuto em cinco fontes) e vem do lado dos designers. Não encontramos nenhuma replicação
independente. Por isso o tema oferece a Lexend Deca como um padrão legível, não como uma ajuda comprovada.

#### Atkinson Hyperlegible

**História.** O Braille Institute of America a criou para pessoas com baixa visão e a lançou em 2019, o ano do
centenário do instituto. Foi desenhada pela agência Applied Design Works como parte da nova marca do instituto, e
recebe o nome do fundador do instituto, J. Robert Atkinson. Ganhou o prêmio Innovation by Design da Fast Company em 2019 e
entrou para a coleção permanente do Cooper Hewitt, Smithsonian Design Museum. Mais tarde passou a estar disponível no Google
Fonts e, em 2025, o instituto lançou a **Atkinson Hyperlegible Next**, com mais pesos e maior suporte a idiomas,
e uma versão monoespaçada. O tema inclui a versão original em normal e em negrito.

**A ideia.** A maioria das fontes busca letras uniformes. A Atkinson Hyperlegible faz o contrário: mantém uma base convencional
sem serifa e acrescenta diferenças apenas onde dois caracteres são fáceis de confundir:

- o **l** minúsculo ganha uma cauda e o número **1** um gancho, de modo que difiram entre si e do **I** maiúsculo,
  que tem serifas;
- **B** e **8**, **O** e **0** e outros pares recebem formas diferentes, aberturas mais largas e terminações angulares;
- as letras são espaçadas de modo que suas bordas não se toquem.

O preço é um aspecto irregular: aparecem serifas em algumas letras e em outras não, e alguns ângulos são exagerados. Para
ler a interface do tema, esse é justamente o objetivo, porque as letras devem ser distinguidas, não ser elegantes.

**O que a evidência diz.** É a fonte desenhada de forma mais direta para os usuários com baixa visão a quem este tema atende, e sua
lógica de design é fácil de entender. Não encontramos nenhum estudo publicado que meça seu efeito na leitura com um grupo de
leitores, de modo que a afirmação se apoia no design e no trabalho do próprio instituto.

#### OpenDyslexic

**História.** Abbie Gonzalez, que tem dislexia, criou a OpenDyslexic e a lançou em 2011 como uma fonte de código aberto,
derivada da Bitstream Vera Sans.

**A ideia.** As letras têm a **base mais pesada**. A autora diz que o peso dá a cada letra um «embaixo» claro, o que
ajuda os leitores a reconhecê-la e evita que invertam ou girem mentalmente letras como b, d, p e q. As formas
das letras também são mais distintas, e o espaçamento é maior.

**O que a evidência diz.** Os estudos que encontramos não sustentam a afirmação de que ela melhora a leitura: um estudo sobre a velocidade
e a precisão da leitura (Wery e Diliberto, 2017) não encontrou melhora em relação a outras fontes, e um estudo posterior com rastreamento ocular de
Rello e Baeza-Yates (2016) concluiu que ela não foi melhor do que fontes sem serifa comuns, como Arial ou Verdana. Muitas
pessoas com dislexia ainda a preferem, e a preferência importa, de modo que o tema a oferece como uma escolha e não como uma
recomendação.

#### Por que fontes como estas são oferecidas em sites para baixa visão e dislexia

1. **O custo é pequeno e o benefício pode ser grande para algumas pessoas.** Mudar a fonte não custa nada em um tema. Para uma
   pessoa que acha uma fonte claramente mais fácil, pode ser a diferença entre ler e desistir.
2. **As pessoas são diferentes.** A baixa visão tem muitas causas (perda do centro ou da borda do campo visual, desfoque, sensibilidade ao brilho),
   e a dislexia não se apresenta igual em todos os leitores. Não existe uma fonte «melhor» única, então a resposta sensata é
   uma lista curta de fontes bem desenhadas que cada pessoa possa experimentar.
3. **As três fontes cobrem três abordagens:** letras abertas e uniformemente espaçadas (Lexend Deca), letras que se distinguem por
   design (Atkinson Hyperlegible) e letras com um «peso» distinto (OpenDyslexic). Um usuário pode compará-las na
   mesma página.
4. **Honestidade sobre a evidência.** Somente o efeito do espaçamento é bem sustentado. Para cada fonte, o tema diz o que seus
   designers pretendiam e o que se sabe, e não promete um resultado.

O usuário decide, e o administrador pode definir a fonte padrão de todo o site (aba **Padrões dos usuários** das configurações
do tema). A aba Informações mostra uma amostra de cada fonte, incluindo os caracteres fáceis de confundir.

#### Fontes

- Braille Institute: [comunicado de imprensa sobre a Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  e [sua disponibilidade no Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html);
  [Atkinson Hyperlegible no GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum: [Atkinson Hyperlegible na coleção](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend no GitHub](https://github.com/googlefonts/lexend/) e [lexend.com](https://www.lexend.com/).
- Gonzalez, A.: [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. e Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. e Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. e Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. e outros (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland: [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen: [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
