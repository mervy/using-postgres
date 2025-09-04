# PostgreSQL no WSL Arch Linux com tabela `authors`

Este repositório mostra como instalar, configurar e usar o **PostgreSQL** no **Arch Linux rodando no WSL**, criar uma tabela de autores (`authors`) e inserir dados de exemplo.

---

## 1️⃣ Pré-requisitos

- Windows 10/11 com **WSL** habilitado.
- Arch Linux instalado no WSL.
- Permissão para instalar pacotes (`sudo`).

---

## 2️⃣ Instalação do PostgreSQL

Abra o Arch Linux no WSL e rode:

```bash
# Atualizar pacotes
sudo pacman -Syu

# Instalar PostgreSQL
sudo pacman -S postgresql
