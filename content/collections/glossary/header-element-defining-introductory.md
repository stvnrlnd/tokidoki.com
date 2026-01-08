---
id: 5deb6a2f-e0c1-4f65-aace-9d0623e469f8
blueprint: html
title: 'Header Element: Sectional Header Content'
teaser: 'The header HTML element represents introductory content or navigational links for a section or page, typically including headings, logos, or menus.'
reference_title:
  code: '<header>'
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
        text: '<header>'
      -
        type: text
        text: ' HTML element is used to define the introductory section of a document or a section within it, such as an article, a page, or a section of a webpage. This element typically contains navigational links, headings, logos, or other introductory content. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<header>'
      -
        type: text
        text: ' is a semantic element that helps organize content, providing a clear structure and context for the section it introduces.'
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
        text: '<header>'
      -
        type: text
        text: ' element can be used at the beginning of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<body>'
      -
        type: text
        text: ' of a webpage or within other elements like '
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
        text: '<section>'
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
        text: ', or '
      -
        type: text
        marks:
          -
            type: code
        text: '<nav>'
      -
        type: text
        text: '. It is designed to contain content that is relevant to the entire document or section, such as a site-wide navigation bar or a section title. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<header>'
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
              <title>Header Example</title>
          </head>
          <body>

          <header>
              <h1>Welcome to My Website</h1>
              <nav>
                  <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
              </nav>
          </header>

          <main>
              <p>This is the main content of the webpage.</p>
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
        text: '<header>'
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
        text: '<header>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0h72b92
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
                text: '<header>'
              -
                type: text
                text: ' element provides clear semantic meaning, indicating that the enclosed content is introductory or related to the section or document as a whole.'
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
                text: ': Using '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<header>'
              -
                type: text
                text: ' helps improve accessibility by clearly defining the start of a content section, aiding navigation for users relying on assistive technologies.'
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
                text: Versatility
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<header>'
              -
                type: text
                text: ' can include a wide range of content, from simple headings to complex navigation structures, making it adaptable to different design needs.'
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
        text: '<header>'
      -
        type: text
        text: ' element is a key component for structuring the introductory parts of a webpage or section, offering a place for essential navigational and introductory information. Its semantic nature enhances both the readability and accessibility of web content.'
link: 'https://html.spec.whatwg.org/multipage/sections.html#the-header-element'
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
updated_at: 1743365483
seo_title: 'HTML Header Element: Section Headers Explained'
seo_description: 'Learn about the header HTML element for defining headers in sections or pages, enhancing navigation and structure.'
og_title: 'Understanding the HTML Header Element'
og_description: 'Discover how the header element in HTML is used to define introductory content and navigation for sections or pages, providing structure and clarity.'
date: '2025-03-30'
---
