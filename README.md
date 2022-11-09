# Desafio Nyx Tecnologia


### 📝Sobre:
Este projeto foi desenvolvido com o intuito de pleitear uma vaga na empresa Nyx Technology, seu fluxo propõe o desenvolvimento de um sistema que permita que o usuário possa locar filmes e series por um periodo fixo de 48 horas selecionado o titulo desejado de uma lista filtrada atraves de uma busca do mesmo. Alem da área do cliente o sistema propõe uma area do administrador onde este possa acompanhar os titulos alugados assim como dados sobre o aluguel deste como data de quando foi alugado e tempo para a expiração das 48 horas.
Confome proposto a listagem de titulos é consumida da API https://www.themoviedb.org/documentation/api?language=pt-BR não sendo assim necessaria nenhuma funcionalidade de gerênciamento destes.

### 💻 Tecnologias Ultilizadas:
Conforme solicitado o sistema ultiliza um framework PHP para seu desenvolvimente, (neste caso o Laravel), para componentizaro o frontend foi ultilizado o Vue3 que com o auxilio do Inertia js e da biblioteca ziggy pode ser ultilizado sem a necessidade de uma biblioteca de rotas usando as proprias rotas do laravel, por fim, para finalizar o frontend o Tailwind CSS com o auxilio do Laravel Mix para facilitar a aplicação de responsidade do mesmo assim como acelerar seu desenvolvimento. 
Para facilitar o desenvolvimento e padronização do versionamento das bibliotecas ultilizadas foi ultilizado o Laravel Sail enquanto para os testes se ultilizou o Laravel Dusk.

### 🔧 Preparando o sistema para teste:
Após baixar o repositorio a primeira coisa que você terá de fazer é instalar suas dependencias, por conveniencia disponibilizei um arquivo deploy.sh que se encarregará de toda a burocracia inicial, para rodar este arquivo você precisará apenas ter uma maquina Unix com uma versão do Docker e o php 8.1 ou superior instalado. Com a maquina em mãos e já dentro da pasta na qual você clonou nosso projeto você executará os seguintes comandos:

``` 
  #Primeiro rodaremos este comando para iniciar seu Docker
  sudo service docker start

  #Em seguida criaremos um alias para seu sail(isto será usado no futuro)
  alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

  #Executaremos o arquivo de deploy
  . deploy.sh

  #E por fim subiremos o servidor de teste
  sail up -d
```

Pronto após rodar o arquivo de deploy o sistema está pronto para ser testado, para facilitar seu teste no deploy já criamos 2 usuário sendo um admin e um usuário padrão, abaixo seguem suas credenciais:

<b>Usuário Admin</b>
email: root@gmail.com
senha: admin

<b>Usuário Cliente</b>
email: user@gmail.com
senha: qwerty7890

Perceba que mais usuários podem ser criados livremente mas todos estes serão cliente.

### ❌ Problemas conhecidos:
Durante o desenvolvimento deste projeto alguns errors foram encontrados, seja erros de bibliotecas ou bugs no próprio sistema que não foram resolvidos por falta de tempo ou por dificuldade de encontrar-los. 
Abaixo esses erros seram listados assim como sempre que possivel sua causa e formas de contornar-lo.

- <b>Erro de execução do Vite no Docker: <b> Para o desenvolvimento do frontend resolvi usar Vue.js, porem, tentei fazer-lo dentro do Laravel e para tal precisei usar o Vite, (até tentei o laravel mix mas o mesmo apresentou problemas de compatibilidade quando usado em conjunto com o Inertia e o Vue 3). Em produção o Vite funciona perfeitamente mas um problema serio ocorre quando se tenta subir o frontend no modo desenvolvimento a partir de um container Docker, nesta situação todas as importações de arquivos .js ficam quabradas e é impossivel se acessar a pagina que se está desenvolvendo.
<b>Solução: </b>Para solucionar esse problema o proprio Vite cria um arquivo na raiz da pasta public do Laravel de nome "hot" sem as aspas e sem extensão todas as vezes que você rodar o comando npm run dev. Dentro do arquivo hot você encontrara escrito http://0.0.0.0:5173 basta trocar o 0.0.0.0 por localhost salvar o arquivo e recarregar a pagina.

- <b>Possibilidade de trocar para a pagina de login mesmo já estando logado: <b> A pagina de welcome deve ser inacessivel para usuários logados, porem, só notei essa brecha no final do desenvolvimento e assim não tive tempo de resolver-la.

- <b>Inexistencia de paginação seja na área do cliente ou na tabela do admin: <b>Percebo que o sistema seria bem melhor se possuise uma paginação na área de listagem de filmes buscados e na tabela de filmes alugados, porem as paginações eram um requisito opicional e acabei não conseguindo desenvolver-la a tempo.

