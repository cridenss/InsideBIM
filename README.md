# MAIN-THEME

Thème WordPress basé sur Full Site Editing (FSE) avec des block patterns personnalisés.

## Structure

- `parts/` : Contient les template-parts (`header.html`, `footer.html`…)
- `patterns/` : Blocs personnalisés réutilisables (Hero, CTA…)
- `assets/css/` : Fichiers CSS
  - `variables.css` : Palette, typographie, breakpoints
  - `patterns.css` : Styles globaux des patterns
- `templates/` : Modèles de page
- `theme.json` : Configuration globale du thème
- `functions.php` : Fonctions PHP (register patterns, styles, etc.)

## Conventions

- Nom des patterns : kebab-case (`service-card.php`)
- Préfixe de pattern : `main-theme/`
- Classes CSS : une classe personnalisée par pattern (`.service-card`) + `wp-block-group` si nécessaire


- Palette définie dans `theme.json` + `variables.css`
- Styles des patterns centralisés dans `patterns.css`

## Catégories pattern

🏠 Header & Navigation
📄 Hero Sections  
🔧 Services & Features
📊 Portfolio & Projects
👥 About & Team
📞 Contact & CTA
📰 Blog & Content
🦶 Footer



