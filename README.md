# docker-v1

## Overview

様々な開発環境のDockerコンテナ構成をまとめたリポジトリです。各ディレクトリには、特定の技術スタックやサービスを素早く立ち上げるためのDockerfileとDocker Compose設定が含まれています。

## Tech Stack

このリポジトリには以下の環境が含まれています：

### Webサーバー
- **Apache** - Apacheウェブサーバー
- **Nginx** - Nginxウェブサーバー

### OS/基本環境
- **Debian** - Debian Linuxベース環境
- **Ubuntu** - Ubuntu Linuxベース環境

### Pythonフレームワーク
- **Django** - Python Djangoフレームワーク (Python 3.10)
- **Flask** - Python Flaskフレームワーク (Flask 2.3.3, Python 3.10)

### PHP環境
- **PHPApache** - PHP + Apache環境
- **WordPress** - WordPress + MariaDB構成

### データベース
- **MariaDB** - MariaDB 10.7データベースサーバー
- **PostgreSQL** - PostgreSQLデータベースサーバー

### 管理ツール
- **pgAdmin** - PostgreSQL管理ツール
- **phpMyAdmin** - MySQL/MariaDB管理ツール

## Setup

各環境を使用するには、Dockerがインストールされている必要があります。

```bash
# Dockerのバージョン確認
docker --version
docker compose version
```

## Usage

各ディレクトリに移動して、Docker Composeでサービスを起動します：

```bash
# 例: Flask環境を起動
cd flask
docker compose up -d

# 例: WordPress環境を起動
cd wordpress
docker compose up -d

# コンテナの停止
docker compose down
```

### アクセスポート例

- Flask: http://localhost:5000
- WordPress: http://localhost:8080
- その他のサービスについては、各ディレクトリの`compose.yaml`を参照してください

## Directory Structure

```
.
├── apache/          # Apache Webサーバー環境
├── debian/          # Debian Linux環境
├── django/          # Django Webフレームワーク環境
├── flask/           # Flask Webフレームワーク環境
├── mariadb/         # MariaDBデータベース環境
├── nginx/           # Nginx Webサーバー環境
├── pgadmin/         # PostgreSQL管理ツール
├── phpapache/       # PHP + Apache環境
├── phpmyadmin/      # MySQL/MariaDB管理ツール
├── postgresql/      # PostgreSQLデータベース環境
├── ubuntu/          # Ubuntu Linux環境
└── wordpress/       # WordPress CMS環境
```

各ディレクトリには以下が含まれます：
- `Dockerfile` - コンテナイメージのビルド設定（該当する場合）
- `compose.yaml` - Docker Compose設定ファイル
- その他、サービス固有の設定ファイルやソースコード

## License

This repository is for personal/private use only.
