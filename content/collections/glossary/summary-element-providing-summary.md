---
id: b7ef8e48-fc64-4615-92d9-026dcb65fcb0
blueprint: html
title: 'Summary Element: Disclosure Summary for Details'
teaser: 'The summary HTML element is used as a summary or heading for a details element, providing a clickable label that controls the visibility of the content within the details. It serves as a brief description or title for the expandable content, enhancing user interaction and accessibility.'
reference_title:
  code: '<summary>'
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
        text: '<summary>'
      -
        type: text
        text: ' HTML element is used as a summary or heading for the '
      -
        type: text
        marks:
          -
            type: code
        text: '<details>'
      -
        type: text
        text: ' element. It provides a visible label that users can click to expand or collapse the content within the '
      -
        type: text
        marks:
          -
            type: code
        text: '<details>'
      -
        type: text
        text: ' element. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<summary>'
      -
        type: text
        text: ' element is an interactive element that enhances the user experience by allowing users to control the visibility of additional content.'
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
        text: '<summary>'
      -
        type: text
        text: ' element is the first child of a '
      -
        type: text
        marks:
          -
            type: code
        text: '<details>'
      -
        type: text
        text: ' element and serves as the clickable heading that toggles the visibility of the content inside the '
      -
        type: text
        marks:
          -
            type: code
        text: '<details>'
      -
        type: text
        text: '. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<summary>'
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
          <details>
            <summary>More Information</summary>
            <p>This section contains additional details that can be expanded or collapsed by clicking the summary above.</p>
          </details>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In this example, "More Information" is the clickable summary that, when clicked, reveals or hides the paragraph of additional details.'
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
        text: '<summary>'
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
        text: '<summary>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0iok6ab
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
                text: 'User Interaction'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<summary>'
              -
                type: text
                text: ' element enhances user interaction by providing a clickable interface for expanding and collapsing content, making it easier to navigate and manage information.'
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
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<summary>'
              -
                type: text
                text: ' element, when used with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<details>'
              -
                type: text
                text: ', improves accessibility by allowing users to control the visibility of content, which can be beneficial for screen readers and other assistive technologies.'
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
                text: 'Semantic Meaning'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<summary>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content is a summary or heading for additional details, helping both users and search engines understand the structure and purpose of the text.'
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
        text: '<summary>'
      -
        type: text
        text: ' element is a valuable tool for creating interactive content sections within a webpage. It provides a clear and accessible way for users to expand or collapse additional information, enhancing both the usability and organization of web content. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<summary>'
      -
        type: text
        text: ' element, developers can create more dynamic and user-friendly interfaces.'
link: 'https://html.spec.whatwg.org/multipage/interactive-elements.html#the-summary-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: interactive
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366695
seo_title: 'HTML Summary Element: Disclosure Summary Explained'
seo_description: 'Explore the summary HTML element for creating clickable headings in details elements, improving content organization and user interaction.'
og_title: 'Understanding the HTML Summary Element'
og_description: 'Learn how the summary element in HTML is used to provide a clickable summary for details elements, enhancing interactivity and content management on web pages.'
date: '2025-03-30'
---
