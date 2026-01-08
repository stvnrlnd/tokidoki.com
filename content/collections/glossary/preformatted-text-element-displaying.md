---
id: 2ad56e91-8e18-4c96-a586-b908507203bb
blueprint: html
title: 'Pre Element: Preformatted Text'
teaser: 'The pre HTML element is used to display preformatted text, preserving spaces, tabs, and line breaks exactly as they are in the HTML code. This element is ideal for displaying code snippets, poetry, or any text where the formatting is essential.'
reference_title:
  code: '<pre>'
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
        text: '<pre>'
      -
        type: text
        text: ' HTML element is used to display preformatted text, which means the text is presented exactly as it is written in the HTML code, with spaces and line breaks preserved. This element is particularly useful for displaying code snippets, ASCII art, or any text content where the formatting and spacing are important and should be maintained as entered.'
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
        text: '<pre>'
      -
        type: text
        text: ' element is a block-level element that maintains both whitespace and line breaks, providing a way to display text that requires specific formatting. It is often used in conjunction with monospaced fonts to display code or other text that benefits from uniform character spacing. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<pre>'
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
          <pre>
          function greet(name) {
              console.log("Hello, " + name + "!");
          }

          greet("World");
          </pre>
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
        text: '<pre>'
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
        text: '<pre>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0ii26my
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
                text: 'Whitespace Preservation'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<pre>'
              -
                type: text
                text: ' element preserves all whitespace and line breaks, making it ideal for displaying content that relies on specific formatting.'
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
                text: Readability
              -
                type: text
                text: ': By maintaining the original formatting, the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<pre>'
              -
                type: text
                text: ' element enhances the readability of code snippets and other preformatted text.'
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
                text: 'Styling Flexibility'
              -
                type: text
                text: ': While the default styling uses a monospaced font, the appearance of text within a '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<pre>'
              -
                type: text
                text: ' element can be customized using CSS to fit the design of the webpage.'
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
        text: '<pre>'
      -
        type: text
        text: ' element is an essential tool for displaying preformatted text in HTML documents. It ensures that text is presented exactly as intended, preserving spaces and line breaks, which is crucial for content like code samples and formatted text. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<pre>'
      -
        type: text
        text: ' element enhances the readability and presentation of structured text content on the web.'
link: 'https://html.spec.whatwg.org/multipage/grouping-content.html#the-pre-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: text_content
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366527
seo_title: 'HTML Pre Element: Preformatted Text Explained'
seo_description: 'Discover the pre HTML element for displaying preformatted text, maintaining spaces and line breaks for accurate presentation.'
og_title: 'Understanding the HTML Pre Element'
og_description: 'Learn how the pre element in HTML is used to present preformatted text, preserving the original formatting with spaces and line breaks for clear and accurate display.'
date: '2025-03-30'
---
