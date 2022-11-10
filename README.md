# Desafio Nyx Tecnologia


### 📝Sobre:
Este projeto foi desenvolvido com o intuito de pleitear uma vaga na empresa Nyx Technology. Seu fluxo propõe o desenvolvimento de um sistema que permita que o usuário possa locar filmes e séries por um período fixo de 48 horas selecionando o título desejado de uma lista filtrada através de uma busca do mesmo. Além da área do cliente, o sistema propõe uma área de administrador onde o mesmo possa acompanhar os títulos alugados, os dados sobre o aluguel, a data de quando foi alugado e o tempo para a expiração das 48 horas.
Confome proposto, a listagem de titulos é consumida da API https://www.themoviedb.org/documentation/api?language=pt-BR não sendo assim necessaria nenhuma funcionalidade de gerenciamento.

### 💻 Tecnologias Utilizadas:
Conforme solicitado, o sistema utiliza um framework PHP para seu desenvolvimento. Foi escolhido o Laravel. Para componentizar o frontend, foi utilizado o Vue.js 3 que, com o auxílio do Inertia.js e da biblioteca ziggy, pode ser ultilizado sem a necessidade de uma biblioteca de rotas, usando as proprias rotas do laravel. Por fim, para finalizar o frontend, foi utilizado o framework Tailwind CSS, com o auxílio do Laravel Mix, para facilitar a aplicação de responsividade e acelerar o desenvolvimento. 
Para gerenciar o desenvolvimento e padronizar o versionamento das bibliotecas utilizadas foi escolhido o Laravel Sail, usando também o Laravel Dusk para testar a aplicação.

### 🔧 Preparando o sistema para teste:
Após baixar o repositório, deve-se instalar suas dependencias. Por conveniência, foi disponibilizado um arquivo ```deploy.sh``` que se encarregará de executar os scripts de instalação. Para conseguir executar este arquivo, é necessário ter uma maquina Unix com Docker e PHP 8.1 ou superior instalado. Depois da configuração inicial, acesse a pasta do projeto clonado e execute os comandos:

 
  #### Inicie o Docker
  ```sudo service docker start```

  #### Crie um alias para o Laravel Sail
  ```alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'```

  #### Execute o arquivo de deploy
  ```. deploy.sh```

  #### Inicie o servidor
  ```sail up -d```


Após a execução dos comandos, o sistema está pronto para ser testado. No arquivo de deploy, existe uma seeder que popula o banco de dados com dois usuários:

**Usuário Admin**
email: root@gmail.com
senha: admin

**Usuário Cliente**
email: user@gmail.com
senha: qwerty7890

Outros usuários *Cliente* podem ser criados livremente.

### ❔ Como usar
O sistema foi desenvolvido de forma bem simples, para ultilizar-lo como cliente basta digitar **http://localhost/** na barra de enreços do seu navegador logar neste com um usuário que você criou ou com usuário cliente de teste, com isto feito so é preciso digitar no campo de busca que fica no topo da tela, em cerca de 3 segundos após o inicio da digitação o sistema fará a busca por filmes na API da TMDB e retornará os posters destes para que o usuário selecione um filme para alugar.
Ápos a busca trazer todas as imagens basta clicar no poster que você deseja e o sitema abrirá um modal mostrando os detalhes do filme, caso este seja realmente o filme que você deseja basta clicar no botão na parte de baixo do modal que diz *Alugue este filme pelos proximos 2 dias* e o sistema por si só fará todo o resto.

Ja na parte do admin você só precisa logar com o usuário admin que é criado no deploy. 

### ❌ Problemas conhecidos:
Alguns erros foram encontrados e persistem no sistema, devido ao prazo de entrega. Haverão correções futuras para solucioná-los.
Segue uma lista de erros, suas possíveis causas e soluções paleativas: 

* **Erro de execução do Vite no Docker**: 
O framework Vue.js foi escolhido para o desenvolvimento do frontend e para fazê-lo funcionar com o Laravel foi necessário utilizar o Vite. O Laravel Mix foi testado e apresentou problemas de compatibilidade quando usado em conjunto com o Inertia.js e o Vue.js 3. Em produção, o Vite funciona adequadamente mas um sério problema ocorre quando se tenta subir o servidor frontend no modo de desenvolvimento a partir de um container Docker. Nesta situação, todas as importações de arquivos ```.js``` param de funcionar e é impossível acessar a pagina que está sendo desenvolvida.
***Solução:*** o Vite cria um arquivo na raiz da pasta public do Laravel nomeado apenas como ```hot``` todas as vezes que você rodar o comando ```npm run dev```. Dentro do arquivo hot, está escrito ```http://0.0.0.0:5173```. Para solucionar o problema, basta trocar o ```0.0.0.0``` por ```localhost```, salvar o arquivo e recarregar a página.

* **Página de login acessível mesmo quando o usuário está logado:** A página de login deve ser inacessível para usuários logados. Essa brecha não foi notada a tempo e será corrigida em alterações futuras.

* **Ausência de paginação:** O sistema estaria devidamente otimizado se houvesse paginação em áreas de cliente, quando se buscar um filme, e administrador, na tabela de filmes alugados. A paginação foi ignorada devido ao tempo de entrega e por ser opcional. Será implementada em alterações futuras. 
