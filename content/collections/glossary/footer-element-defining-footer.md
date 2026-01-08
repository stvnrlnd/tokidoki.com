---
id: 4aaff7c3-2dbf-45cd-bc83-36fd469832f3
blueprint: html
title: 'Footer Element: Sectional Footer Content'
teaser: 'The footer HTML element is used to define the footer for a section or page, typically containing metadata, links, or copyright information.'
reference_title:
  code: '<footer>'
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
        text: '<footer>'
      -
        type: text
        text: ' HTML element is used to define the footer section of a document or a section within it, such as an article or a webpage. This element is typically used to contain information about the author, copyright details, links to related documents, or contact information. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<footer>'
      -
        type: text
        text: ' is a semantic element that helps delineate the end of a content section, providing a natural place for concluding information or navigational links.'
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
        text: '<footer>'
      -
        type: text
        text: ' element can appear at the bottom of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<body>'
      -
        type: text
        text: ' of a webpage or within other sections like '
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
        text: ', or '
      -
        type: text
        marks:
          -
            type: code
        text: '<aside>'
      -
        type: text
        text: '. It is versatile and can include various types of content, such as text, links, images, or even other structural elements like '
      -
        type: text
        marks:
          -
            type: code
        text: '<nav>'
      -
        type: text
        text: '. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<footer>'
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
              <title>Footer Example</title>
          </head>
          <body>

              <h1>Welcome to My Website</h1>
              <p>This is a sample webpage demonstrating the use of the footer element.</p>

              <footer>
                  <p>&copy; 2024 My Website. All rights reserved.</p>
                  <nav>
                      <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </nav>
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
        text: '<footer>'
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
        text: '<footer>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0h6fpl6
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
                text: '<footer>'
              -
                type: text
                text: ' element provides clear semantic meaning, indicating that the enclosed content is related to the conclusion or summary of the section or document.'
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
                text: '<footer>'
              -
                type: text
                text: ' helps improve accessibility by clearly defining the end of a content section, aiding navigation for users relying on assistive technologies.'
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
                text: '<footer>'
              -
                type: text
                text: ' can include a wide range of content, from simple text to complex navigation structures, making it adaptable to different design needs.'
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
        text: '<footer>'
      -
        type: text
        text: ' element is a key component for structuring the end of a webpage or section, offering a place for essential concluding information and navigation. Its semantic nature enhances both the readability and accessibility of web content.'
link: 'https://html.spec.whatwg.org/multipage/sections.html#the-footer-element'
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
updated_at: 1743365323
seo_title: 'HTML Footer Element: Sectional Footers Explained'
seo_description: 'Explore the footer HTML element for adding footers to sections or pages, enhancing organization with metadata and links.'
og_title: 'Understanding the HTML Footer Element'
og_description: 'Learn how the footer element in HTML is used to define footer content for sections or pages, providing structure for metadata, links, and more.'
date: '2025-03-30'
---
