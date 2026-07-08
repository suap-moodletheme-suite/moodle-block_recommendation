# Bloco de Recomendação (block_recommendation)

O **Bloco de Recomendação** é um plugin de bloco para a plataforma Moodle, projetado para integrar-se ao ecossistema **SUAP Moodle Theme Suite** (desenvolvido no contexto do IFRN). Ele permite que administradores e gerentes exibam blocos de conteúdos personalizados em HTML (como avisos, links importantes, banners ou recomendações) em locais estratégicos do Moodle.

## 🚀 Funcionalidades

- **Editor Rich Text (HTML):** Permite configurar conteúdos dinâmicos com texto formatado, imagens, links e outros elementos diretamente pela interface do Moodle.
- **Locais de Exibição:** Projetado especificamente para ser adicionado nas seguintes páginas:
  - Página Inicial do Site (`site-index`)
  - Painel do Usuário / Dashboard (`my`)
- **Renderização por Template:** Utiliza o sistema de templates Mustache (`recommendation.mustache`) do Moodle, garantindo conformidade com os padrões de design do tema.
- **Suporte Multi-idioma:** Tradução nativa para Inglês e Português do Brasil (PT-BR).

## ⚙️ Requisitos

- **Moodle:** Versão mínima `2022112800` (Moodle 4.1+)
- **Maturidade:** Estável (Maturity Stable)

## 🛠️ Instalação

1. Baixe ou clone este repositório para a pasta de blocos do seu Moodle:
   ```bash
   cd /caminho/do/moodle/blocks
   git clone <URL_DO_REPOSITORIO> recommendation
   ```
2. Faça login no Moodle como Administrador.
3. Acesse a página de administração para disparar o processo de atualização de plugins: `http://seu-moodle.edu.br/admin`
4. Siga as instruções na tela para concluir a instalação do banco de dados.

## 📝 Como Usar

1. Ative o **Modo de Edição** na página inicial do site ou no seu painel pessoal.
2. Clique em **Adicionar um bloco** e selecione **Recommendation**.
3. No menu de engrenagem do bloco criado, clique em **Configurar bloco Recommendation**.
4. Na seção de configuração, utilize o editor de texto para inserir e formatar o conteúdo desejado.
5. Salve as alterações.

## 📄 Licença

Este plugin é distribuído sob a licença GNU General Public License v3 ou posterior. Veja o arquivo [LICENSE.md](file:///C:/Users/2080882/projetos/IFRN/suap-moodletheme-suite/block_recommendation/LICENSE.md) para mais detalhes.
