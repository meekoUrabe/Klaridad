# Klaridad 🏛️
> **"Transparency in Governance, Powered by Citizens."**

**Klaridad** makes government data actually usable. Budgets and public spending
are *technically* public — but buried in jargon-filled documents nobody reads.
We fix that.

Built for **InterCICSKwela 2026: Batang Techno Hackathon** | Aligned with
**UN SDG 16** — Peace, Justice & Strong Institutions

---

## The Problem

Government reports exist. Citizens can't use them.

- Data is scattered across long, technical documents
- No visual context, no plain-language summaries
- Most people have no idea where their taxes go

This isn't just inconvenient — it erodes public trust.

---

## Our Solution

Klaridad is a web platform that transforms raw government data into:

| Feature | What it does |
|---|---|
| 📊 Visual Dashboards | Budget breakdowns by barangay, category, and project |
| 📝 Citizen Reports | Users can submit and publish their own reports |
| 🔍 Smart Filtering | Search by barangay, category, or status in real time |
| 🔐 Location-aware Login | Each user sees data scoped to their own barangay |

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel (PHP) |
| Database | MySQL |
| Frontend | Laravel Blade |

---

## Running Locally (Judge-Friendly)

### 1) Install dependencies

```bash
composer install
npm install
```

### 2) Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

### 3) Create database and import schema/data

```bash
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS klaridad;"
mysql -u root -p klaridad < klaridad.sql
```

### 4) Run the app

```bash
php artisan serve
```

Open: `http://localhost:8000`

> Note: This project uses `klaridad.sql` for schema + demo data setup.

---

## SDG Alignment

Klaridad directly supports **UN SDG 16.6** — *developing effective, accountable,
and transparent institutions at all levels.* Transparency only works if people
can actually understand the information.

---

## Transparency Notice: AI Tools Used in Development

GitHub Copilot and Claude were used during development for debugging assistance and bug fixes. All core logic, features, and architecture were designed and implemented by the team. This disclosure is made in accordance with hackathon rules requiring transparency about tool usage.

---

*Hackathon submission — 2026*