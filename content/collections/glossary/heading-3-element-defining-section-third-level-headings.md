---
id: 32c663a1-7015-430e-8bc3-4c201c61489d
blueprint: html
title: 'H3 Element: Tertiary Heading in Content'
teaser: 'The h3 HTML element is used to define a tertiary heading, helping to further organize content into subsections under secondary headings.'
reference_title:
  code: '<h3>'
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
        text: '<h3>'
      -
        type: text
        text: ' HTML element is used to define a third-level heading in a webpage or section of content. It represents a subheading under the second-level '
      -
        type: text
        marks:
          -
            type: code
        text: '<h2>'
      -
        type: text
        text: ' heading, providing further hierarchical structure to the content. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<h3>'
      -
        type: text
        text: ' element is a block-level element that helps organize and outline the document, indicating that the content it introduces is a subsection of the higher-level heading.'
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
        text: '<h3>'
      -
        type: text
        text: ' element is important for creating a logical and accessible structure within a webpage. It helps both users and search engines understand the hierarchy and organization of content. While '
      -
        type: text
        marks:
          -
            type: code
        text: '<h1>'
      -
        type: text
        text: ' is used for the main heading and '
      -
        type: text
        marks:
          -
            type: code
        text: '<h2>'
      -
        type: text
        text: ' for major subheadings, '
      -
        type: text
        marks:
          -
            type: code
        text: '<h3>'
      -
        type: text
        text: ' is used for further subdivisions. This hierarchical structure can continue with '
      -
        type: text
        marks:
          -
            type: code
        text: '<h4>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<h5>'
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: code
        text: '<h6>'
      -
        type: text
        text: ' for even more detailed sections. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<h3>'
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

          <main>
              <section>
                  <h2>About Us</h2>
                  <p>This section provides information about our company.</p>
                  <h3>Our History</h3>
                  <p>Details about the company's history.</p>
                  <h3>Our Team</h3>
                  <p>Information about the team members.</p>
              </section>
              <section>
                  <h2>Our Services</h2>
                  <p>Details about the services we offer.</p>
              </section>
          </main>

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
        text: '<h3>'
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
        text: '<h3>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0h7eu3s
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
                text: 'Semantic Structure'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<h3>'
              -
                type: text
                text: " element provides a clear indication of the content hierarchy, making it easier for users and search engines to understand the document's structure."
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
                text: ': Proper use of '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<h3>'
              -
                type: text
                text: " enhances accessibility by allowing screen readers to convey the document's organization, aiding users in navigating the content."
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
                text: '<h3>'
              -
                type: text
                text: ' element is beneficial for SEO, as it helps search engines interpret the structure and importance of content, influencing how the page is indexed and ranked.'
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
        text: '<h3>'
      -
        type: text
        text: ' element is an essential part of HTML structure, serving as a tertiary heading for organizing content under secondary headings. Its use is crucial for semantic clarity, accessibility, and SEO, contributing to a well-structured and user-friendly webpage.'
link: 'https://html.spec.whatwg.org/multipage/sections.html#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: content_sectioning
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743365514
seo_title: 'HTML H3 Element: Tertiary Headings Explained'
seo_description: 'Explore the h3 HTML element for defining tertiary headings, structuring content under secondary headings.'
og_title: 'Understanding the HTML H3 Element'
og_description: 'Learn how the h3 element in HTML is used to create tertiary headings, providing additional structure and organization to content under secondary headings.'
date: '2025-03-30'
---
