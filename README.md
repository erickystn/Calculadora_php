# 🧮 Calculadora Web MVC — PHP Puro & Composer

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Arquitetura](https://img.shields.io/badge/Arquitetura-MVC_Nativo-blue?style=for-the-badge)
![Composer](https://img.shields.io/badge/Composer-Autoload-885630?style=for-the-badge&logo=composer&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-Template-009639?style=for-the-badge&logo=nginx&logoColor=white)
![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)
![Licença](https://img.shields.io/badge/Licença-MIT-yellow?style=for-the-badge)

---

## 🔗 Ambiente Local e Rotas Amigáveis

* **Servidor Embutido Local:** `http://localhost:8000`
* **Rotas das Operações:**
  * `/`: Página Inicial com Menu de Seleção
  * `/home/soma`: Calculadora de Adição ($A + B$)
  * `/home/subtracao`: Calculadora de Subtração ($A - B$)
  * `/home/multiplicacao`: Calculadora de Multiplicação ($A \times B$)
  * `/home/divisao`: Calculadora de Divisão ($A \div B$) com proteção contra divisão por zero

---

## 📖 Visão Geral

A **Calculadora Web MVC** é uma aplicação desenvolvida em **PHP puro**, estruturada sobre um núcleo próprio de arquitetura **Model-View-Controller (MVC)** e gerenciamento de dependências via **Composer**.

Criado para demonstrar os fundamentos de engenharia de software na web com PHP sem o uso de frameworks pré-fabricados (como Laravel ou Symfony), o projeto implementa um motor completo de **Front Controller** e **URL Rewriting**, isolando completamente a lógica de controle de requisições (`app/core/Core.php`), o modelo de apresentação com layout mestre (`template.php`) e os cálculos aritméticos.

---

## ✨ Funcionalidades

* ➕ **Adição (`/home/soma`):** Formulário interativo para soma de dois operandos com persistência visual dos valores e exibição destacada do total.
* ➖ **Subtração (`/home/subtracao`):** Operação de diferença entre valores com suporte a números decimais e negativos.
* ✖️ **Multiplicação (`/home/multiplicacao`):** Produto aritmético com validação de entrada de dados numéricos.
* ➗ **Divisão Segura (`/home/divisao`):** Cálculo de quociente com checagem defensiva: impede a divisão por zero e apresenta alerta visual explicativo ao usuário.
* 🖼️ **Layout Mestre Unificado (`template.php`):** Estrutura padronizada contendo cabeçalho institucional, logotipo, barra de navegação entre as operações e rodapé compartilhado.

---

## 🎯 Diferenciais e Destaques Técnicos

1. **Front Controller e Roteamento Desacoplado:** A classe `Core.php` captura o parâmetro `url` reescrito pelo servidor web, identifica o controlador (`Controller`), o método (`Action`) e os argumentos passados na query string, instanciando-os dinamicamente.
2. **Sistema de Renderização em Duas Camadas:**
   * `loadView()`: Extrai os dados associativos do modelo em variáveis e carrega a visão específica da operação.
   * `loadTemplate()`: Envelopa a view filha dentro do layout visual mestre (`template.php`).
3. **Compatibilidade Multi-Servidor (Apache & Nginx):** O repositório inclui tanto as diretivas de reescrita `.htaccess` para servidores Apache quanto um template pronto `nginx.template.conf` com suporte a FastCGI PHP-FPM.
4. **Design Responsivo em CSS Puro:** Folha de estilos dedicada (`assets/css/style.css`) com tipografia moderna, cartões com sombras suaves (*box-shadow*) e botões com transições animadas no *hover*.

---

## 🏗️ Estrutura do Repositório

```text
Calculadora_php/
├── app/
│   ├── controllers/
│   │   └── HomeController.php  # Métodos que processam os formulários de cada operação
│   ├── core/
│   │   ├── Controller.php      # Classe base com helpers de carregamento de views
│   │   ├── Core.php            # Motor de roteamento e Front Controller
│   │   └── Model.php           # Classe base de conexão e dados
│   ├── models/
│   │   └── Operacao.php        # Model de regras aritméticas
│   └── views/                  # Telas renderizadas
│       ├── home.php            # Apresentação do menu
│       ├── soma.php            # Interface de adição
│       ├── subtracao.php       # Interface de subtração
│       ├── multiplicacao.php   # Interface de multiplicação
│       ├── divisao.php         # Interface de divisão com proteção contra zero
│       └── template.php        # Layout base (Header, Nav, Content, Footer)
├── assets/
│   ├── css/style.css           # Estilização visual da aplicação
│   └── img/                    # Imagens e logotipo
├── config/
│   └── config.php              # Configurações de URL base e constantes
├── composer.json               # Configuração do autoload PSR-4
├── index.php                   # Ponto de entrada único da aplicação
├── nginx.template.conf         # Configuração de deploy para servidor Nginx
└── .htaccess                   # Regras de URL amigável para Apache
```

---

## 🎨 Fluxo de Execução da Arquitetura MVC

```text
       [ Requisição do Navegador: /home/divisao ]
                           │
                           ▼
                  [ index.php ]
                           │
                           ▼
               [ app/core/Core.php ]
               (Roteador Front Controller)
                           │
                           ▼
          [ HomeController -> divisao() ]
                           │
              ┌────────────┴────────────┐
              ▼                         ▼
      [ Operacao Model ]       [ app/views/divisao.php ]
      (Validação de Zero)     (Injetado em template.php)
              │                         │
              └────────────┬────────────┘
                           ▼
             [ Resposta HTML Renderizada ]
```

---

## ⚙️ Requisitos e Instalação

### Pré-requisitos
* **PHP:** Versão 8.0 ou superior.
* **Composer:** Para geração do autoloader de classes.
* **Servidor Web:** Apache (com `mod_rewrite`), Nginx ou o servidor CLI embutido do próprio PHP.

### 1. Clonar o Repositório
```bash
git clone https://github.com/erickystn/Calculadora_php.git
cd Calculadora_php
```

### 2. Instalar as Dependências / Autoload
```bash
composer dump-autoload
```

---

## 🚀 Como Executar

A forma mais rápida de testar a aplicação localmente sem configurar servidores externos é utilizando o servidor embutido do PHP:

```bash
# Executar a partir da raiz do projeto:
php -S localhost:8000
```

Abra o navegador no endereço: `http://localhost:8000`.

---

## 💻 Exemplo de Implementação de Segurança Aritmética

Trecho do método de divisão no `HomeController.php`:

```php
public function divisao() {
    $dados = array();
    
    if (!empty($_POST['n1']) && isset($_POST['n2'])) {
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);

        if ($n2 == 0) {
            $dados['erro'] = "Não é possível dividir por zero!";
        } else {
            $dados['resultado'] = $n1 / $n2;
        }
        $dados['n1'] = $n1;
        $dados['n2'] = $n2;
    }

    $this->loadTemplate('divisao', $dados);
}
```

---

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Finalidade |
| :--- | :--- |
| **PHP 8.x** | Linguagem de programação backend e renderização server-side |
| **Composer** | Gerenciamento do autoloader PSR-4 e mapeamento de namespaces |
| **CSS3** | Estilização responsiva com Flexbox, sombras e paleta moderna |
| **Apache / Nginx** | Suporte configurado para servidores web com reescrita de rotas |

---

## 👤 Autor & 📄 Licença

Desenvolvido por **[Ericky Sant'ana](https://github.com/erickystn)** para estudo de arquiteturas web em PHP.

Distribuído sob a licença **MIT**.
