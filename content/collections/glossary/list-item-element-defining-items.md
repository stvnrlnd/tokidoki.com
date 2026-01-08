---
id: 5b081c48-a5a2-4aeb-b830-f1dd6b93e261
blueprint: html
title: 'LI Element: List Item in HTML'
teaser: 'The li HTML element is used to represent an individual item within a list, whether ordered (ol) or unordered (ul), contributing to the structured presentation of grouped content.'
reference_title:
  code: '<li>'
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
        text: '<li>'
      -
        type: text
        text: ' HTML element is used to represent an item in a list. It is a fundamental component for creating both ordered ('
      -
        type: text
        marks:
          -
            type: code
        text: '<ol>'
      -
        type: text
        text: ') and unordered ('
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ') lists, as well as description lists ('
      -
        type: text
        marks:
          -
            type: code
        text: '<dl>'
      -
        type: text
        text: '), although in the latter case, it is used indirectly through '
      -
        type: text
        marks:
          -
            type: code
        text: '<dt>'
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: code
        text: '<dd>'
      -
        type: text
        text: '. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<li>'
      -
        type: text
        text: ' element helps organize content into a structured format, making it easier for users to read and understand.'
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
        text: '<li>'
      -
        type: text
        text: ' element must be a child of a list container, such as '
      -
        type: text
        marks:
          -
            type: code
        text: '<ul>'
      -
        type: text
        text: ' for unordered lists or '
      -
        type: text
        marks:
          -
            type: code
        text: '<ol>'
      -
        type: text
        text: ' for ordered lists. Each '
      -
        type: text
        marks:
          -
            type: code
        text: '<li>'
      -
        type: text
        text: ' element represents a single list item, and in the case of ordered lists, the items are automatically numbered by the browser. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<li>'
      -
        type: text
        text: ' tag can be used in both types of lists:'
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'Unordered List:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <ul>
            <li>Apples</li>
            <li>Oranges</li>
            <li>Bananas</li>
          </ul>
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'Ordered List:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <ol>
            <li>First step</li>
            <li>Second step</li>
            <li>Third step</li>
          </ol>
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
        text: '<li>'
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
        text: '<li>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript. It also has a specific attribute:'
  -
    type: set
    attrs:
      id: m0ig72n7
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
              - value
              - 'Used with <li> elements within an <ol>, it specifies the value of the list item, overriding the default numbering. This attribute is not commonly used in modern HTML.'
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
                text: '<li>'
              -
                type: text
                text: ' element provides a clear semantic structure for list items, enhancing the readability and organization of content.'
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
                text: ': Proper use of lists and '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<li>'
              -
                type: text
                text: ' elements improves accessibility by providing a logical structure that is easily interpreted by screen readers and other assistive technologies.'
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
                text: ': Lists can be styled using CSS to create custom appearances, such as changing bullet styles for unordered lists or numbering styles for ordered lists.'
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
        text: '<li>'
      -
        type: text
        text: ' element is a fundamental part of HTML for creating lists, which are essential for organizing content in a clear and structured manner. Its use enhances both the readability and accessibility of web content, making it easier for users to navigate and understand information.'
link: 'https://html.spec.whatwg.org/multipage/grouping-content.html#the-li-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: lists
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366334
seo_title: 'HTML LI Element: List Items Explained'
seo_description: 'Learn about the li HTML element for defining items within ordered and unordered lists, enhancing content organization.'
og_title: 'Understanding the HTML LI Element'
og_description: 'Discover how the li element in HTML is used to define individual list items, organizing content within ordered and unordered lists for clear presentation.'
date: '2025-03-30'
---
