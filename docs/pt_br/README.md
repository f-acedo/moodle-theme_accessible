# Accessible: um tema do Moodle para pessoas cegas, com baixa visão ou daltônicas

**Languages:** [English](../../README.md) · [Español](../es/README.md) · [Català](../ca/README.md) · [Français](../fr/README.md) · [Italiano](../it/README.md) · Português (Brasil) · [Deutsch](../de/README.md)

**_O Moodle deveria funcionar para todas as pessoas que precisam usá-lo, e não apenas para quem tem a visão perfeita._**

O Accessible é um tema para o Moodle 5.2 e versões posteriores, baseado no Boost. Ele foi projetado desde o início para três grupos de usuários que costumam ser deixados por conta própria:

- **Pessoas totalmente cegas** que usam um leitor de tela.
- **Pessoas com baixa visão** que usam lupas, o zoom do navegador ou lentes especiais.
- **Pessoas com deficiência de visão de cores** (daltonismo), para quem «o botão vermelho» ou «o campo verde» não significam nada.

O objetivo é que estudantes, professores e administradores com essas necessidades possam realmente *perceber e navegar* no Moodle, e não apenas que as páginas passem por uma lista de verificação.

## Por que ele é diferente

A maioria dos temas parte de um design visual e corrige a acessibilidade depois. O Accessible faz o contrário: cada decisão sobre cor, tamanho, ordem e redação foi tomada primeiro pensando em seus usuários.

- **Simples por princípio.** Fundo branco, texto preto, links pretos e sublinhados, alvos grandes e um indicador de foco bem marcado. Nada decorativo que precise ser desativado.
- **A cor nunca transmite significado sozinha.** Os alertas têm uma moldura colorida, um padrão, um símbolo *e* uma palavra escrita («Erro:», «Aviso:»).
- **Tudo acompanha o tamanho do texto.** Os tamanhos são relativos, então um texto maior resulta em um Moodle maior: ícones, botões e campos crescem junto com o texto.
- **O usuário decide.** Cada pessoa escolhe sua fonte, o tamanho do texto, o espaçamento, o contraste, o movimento, o foco e a visão de cores, e pode fazer isso antes de entrar.
- **Medido, não presumido.** O contraste do texto busca o nível AAA das WCAG 2.1 (7:1 para texto normal, 4,5:1 para texto grande), verificado com análises automáticas em contraste normal e alto, em vários tamanhos de texto, no Chromium e no Firefox.

## Recursos

### Para todos os usuários

- **Opções pessoais de acessibilidade** em uma única página, acessada pelo botão de acessibilidade que está sempre na barra superior:
  - **Fonte:** Lexend Deca (padrão), Atkinson Hyperlegible ou OpenDyslexic. As três estão incluídas no tema.
  - **Tamanho do texto:** 100%, 125%, 150% ou 200%. Todo o layout acompanha, incluindo ícones e botões.
  - **Espaçamento do texto:** normal, amplo ou extra amplo.
  - **Contraste:** normal (preto sobre branco) ou alto (branco sobre preto, com o amarelo reservado para o mouse sobre o elemento e para o foco).
  - **Movimento:** normal ou reduzido (a configuração do sistema também é respeitada).
  - **Contorno do foco:** normal ou grosso.
  - **Filtros de visão de cores** para deficiências de vermelho (protan), verde (deutan) e azul (tritan), cada um em três intensidades, além de uma visualização sem cor. Branco, cinza e preto nunca mudam.
- **Controles grandes e tolerantes:** alvos de pelo menos 44 px nos botões, campos de formulário de 55 px, caixas de seleção e botões de opção grandes, e barras de rolagem grandes e de alto contraste (no Chrome, no Edge e em outros navegadores Chromium; o Firefox mantém a própria largura).
- **Uma página que faz sentido quando lida em voz alta:** o conteúdo principal vem antes dos blocos, cada área de navegação tem um nome, o campo de senha tem um botão «Mostrar senha» que informa se está ativado, e um botão «Voltar ao topo» aparece ao rolar a página.
- **Opções antes de entrar:** o botão de acessibilidade também está na página de login. No primeiro login, essas escolhas são copiadas para a conta, a menos que a conta já tenha as suas.

### Para administradores

- **Use-o como tema do site ou ofereça-o como uma opção** ao lado do seu tema principal (com «Permitir temas de usuários» ativado). Os usuários podem voltar a outro tema pela mesma página.
- **Padrões do site** para fonte, tamanho do texto, espaçamento, contraste, movimento e foco, para todos, inclusive visitantes.
- **Uma aba Informações** nas configurações do tema, com uma imagem de teste de visão de cores, amostras das fontes, licenças e um resumo de suporte que você pode copiar para um relatório de erro.
- **Uma verificação de estado** (Relatórios > Estado do sistema) que avisa quando os usuários não podem escolher o tema ou as suas opções.
- **Privacidade integrada:** as preferências são declaradas e exportadas pela API de privacidade do Moodle. As escolhas dos visitantes ficam em um cookie que contém apenas opções de exibição.
- **Nenhuma requisição externa de fontes:** as fontes estão incluídas no tema.
- **Sete idiomas:** inglês, espanhol, catalão, francês, italiano, alemão e português do Brasil. As traduções estão disponíveis nos pacotes de idiomas do Moodle.

## Bom saber

- A aparência é **deliberadamente simples**. Se você precisa de uma identidade visual marcante ou de cores personalizadas, este não é o tema para você.
- O tema não pode alterar o conteúdo que não controla: **atividades H5P, iframes incorporados e texto colorido manualmente** no conteúdo dos cursos.
- Com o texto em 200%, algumas páginas largas do Moodle (o livro de notas, a página de gerenciamento de cursos e a página de tentativa de questionário) ainda podem rolar para os lados.
- Alguns limites vêm do próprio Moodle, como níveis de título que são pulados em algumas páginas do núcleo.
- O tema **não passou por uma auditoria nem por uma certificação formais**. Nenhum tema consegue tornar um site acessível sozinho: o conteúdo dos cursos importa tanto quanto.

## Requisitos e instalação

- Moodle 5.2 ou posterior, e o tema Boost (incluído no Moodle).
- No Moodle 5.3, o tema usa o menu principal clássico, não o novo menu do Moodle 5.3.
- Copie o tema para `public/theme/accessible` (a pasta deve se chamar `accessible`; se você baixar o ZIP do GitHub, renomeie a pasta antes), ou instale-o em *Administração do site > Plugins > Instalar plugins*, e conclua a instalação em *Administração do site > Avisos*.
- Para defini-lo como tema do site: *Administração do site > Aparência > Temas*.
- Para que cada usuário possa escolhê-lo e definir suas próprias opções, ative **Permitir temas de usuários** (*Administração do site > Aparência > Configurações avançadas de tema*).
- Quando ele é uma opção do usuário, a página de login usa o tema do site. Para dar aos usuários um link de login que abre o Accessible, ative **Permitir mudanças de tema na URL** e compartilhe `https://your.site/login/index.php?theme=accessible` (veja no [guia](accessible-theme-guide.md#um-link-de-login-que-abre-o-accessible) a contrapartida).

Não há etapa de compilação: nem Grunt, nem npm, nem webpack.

## Registro de alterações

Versão 1.0.0 (2026-11-11): versão inicial.

## Versionamento

**O versionamento semântico (SemVer) é um sistema de numeração padronizado que traz clareza e previsibilidade ao desenvolvimento de software: atribui a cada versão um número de três partes (MAJOR.MINOR.PATCH).** Em plugins e temas do Moodle, sua finalidade principal é comunicar aos administradores do sistema a natureza exata das mudanças de código e de estrutura antes que atualizem um site em produção. Ao distinguir entre pequenas correções visuais, adições seguras de recursos e mudanças de arquitetura que quebram a compatibilidade, o SemVer faz com que a manutenção da plataforma seja segura, que as atualizações sejam previsíveis e que as implantações automatizadas não alterem sem querer a experiência dos usuários nem corrompam a configuração do banco de dados.

### Referência de versionamento do tema Accessible (SemVer)

| Tipo de versão | Incremento de versão | O que implica para um tema do Moodle | Exemplos e detalhes técnicos do Moodle |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Pequenos ajustes de estilo e correção de erros.** Correções puramente estéticas ou internas que não mudam como o tema é configurado ou usado estruturalmente. | • Corrigir um erro de espaçamento CSS ou de layout responsivo.<br>• Ajustar a cor de um botão ou o contraste da tipografia.<br>• Resolver um aviso menor do PHP nos logs do servidor.<br>• *Altera apenas os últimos dígitos de `$plugin->version` em `version.php`.* |
| **Minor** | `0.Y.0` | **Novos recursos ou adaptações seguras à plataforma.** Adicionar opções que não transformam a estrutura do tema, ou atualizar o código para oferecer suporte a uma nova versão do Moodle mantendo a compatibilidade com as atuais. | • Adicionar uma opção de layout ou uma região de blocos nova sem remover as antigas.<br>• Introduzir uma nova configuração própria em `settings.php` (por exemplo, um interruptor do cabeçalho).<br>• Atualizar o tema para oferecer suporte a uma nova versão secundária do Moodle.<br>• *Pode ser automatizado sem risco; não quebra os layouts de curso existentes.* |
| **Major** | `X.0.0` | **Mudanças estruturais que quebram a compatibilidade ou atualizações importantes.** Mudanças funcionais de grande alcance que exigem a atenção do administrador, modificações no banco de dados ou o fim do suporte a versões anteriores do Moodle, o que poderia quebrar o site na atualização. | • Redesenhar por completo a estrutura do layout (remover ou renomear regiões de blocos antigas).<br>• Mudar os nomes das variáveis de configuração (perdendo as configurações antigas do tema em `config_plugins`).<br>• Atualizar o tema somente para uma nova versão principal do Moodle, deixando de oferecer suporte às anteriores (exige incrementar `$plugin->requires`). |

## Mais informações

O [guia completo](accessible-theme-guide.md) explica por que o tema existe, os padrões que ele segue, cada recurso em detalhe, as fontes e sua história, e seus limites conhecidos. Os detalhes técnicos dos filtros de visão de cores, os limites do alto contraste e a história das fontes estão no apêndice A do guia.

[Código-fonte e versões](https://github.com/f-acedo/moodle-theme_accessible). Relatórios de erros e sugestões: [rastreador de problemas](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Créditos e licença

Desenvolvido por Fernando Acedo e pela antiga equipe de desenvolvimento da Koditik. O Claude Code ajudou a escrever partes do tema, o revisou e ajudou a testá-lo. Claude é uma marca registrada da Anthropic, PBC.

Licenciado sob a **GNU GPL v3 ou posterior** (veja `LICENSE.txt`). As fontes incluídas (Lexend Deca, Atkinson Hyperlegible e OpenDyslexic) são licenciadas sob a **SIL Open Font License 1.1**.
