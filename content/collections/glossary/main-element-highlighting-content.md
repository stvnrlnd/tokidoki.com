---
id: e71fc83e-90b8-496f-a21a-04d9db9e0eef
blueprint: html
title: 'Main Element: Main Content Area'
teaser: 'The main HTML element is used to encapsulate the dominant content of a document, excluding headers, footers, and sidebars, to improve accessibility and SEO by clearly defining the primary content area.'
reference_title:
  code: '<main>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<main>'
      -
        type: text
        text: ' HTML element is used to encapsulate the dominant content of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<body>'
      -
        type: text
        text: ' of a document. This element is intended to contain content that is directly related to or expands upon the central topic of the document or application. It is a semantic element introduced in HTML5 to improve the accessibility and structure of web pages by clearly identifying the main content area, which is distinct from other sections like headers, footers, navigation, and sidebars.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<main>'
      -
        type: text
        text: ' element should be used only once per document and should not be a child of elements like '
      -
        type: text
        marks:
          -
            type: code
        text: '<article>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<aside>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<footer>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<header>'
      -
        type: text
        text: ', or '
      -
        type: text
        marks:
          -
            type: code
        text: '<nav>'
      -
        type: text
        text: '. It is designed to hold the core content of the page that is unique to the document, excluding repeated content like site-wide headers or navigation bars. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<main>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Document Title</title>
          </head>
          <body>
          <header>
              <h1>Welcome to My Website</h1>
          </header>
          <nav>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </nav>
          <main>
              <article>
                  <h2>Main Article</h2>
                  <p>This is the main content of the webpage.</p>
              </article>
          </main>
          <footer>
              <p>&copy; 2024 My Website. All rights reserved.</p>
          </footer>
          </body>
          </html>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<main>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<main>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0igbc6k
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - class
              - 'Specifies one or more class names for the element, used for CSS styling.'
          -
            cells:
              - id
              - 'Defines a unique identifier for the element, useful for linking and JavaScript.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Semantic Clarity'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<main>'
              -
                type: text
                text: ' element provides clear semantic meaning, indicating the primary content of the document, which aids both users and search engines in understanding the page structure.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': Using the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<main>'
              -
                type: text
                text: ' element improves accessibility by helping screen readers and other assistive technologies identify the main content area, allowing users to navigate more efficiently.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: SEO
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<main>'
              -
                type: text
                text: ' element can positively impact SEO by clearly delineating the main content of the page, which search engines use to understand the relevance and context of the content.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<main>'
      -
        type: text
        text: ' element is a valuable tool for structuring the primary content of a webpage. It enhances semantic clarity, accessibility, and SEO, contributing to a well-organized and user-friendly web experience.'
link: 'https://html.spec.whatwg.org/multipage/sections.html#the-main-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: generic_containers
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366352
seo_title: 'HTML Main Element: Main Content Area Explained'
seo_description: 'Explore the main HTML element for defining the primary content area of a document, enhancing accessibility and SEO.'
og_title: 'Understanding the HTML Main Element'
og_description: 'Learn how the main element in HTML is used to designate the central content of a webpage, excluding headers and footers, to improve accessibility and focus on the primary information.'
date: '2025-03-30'
---
