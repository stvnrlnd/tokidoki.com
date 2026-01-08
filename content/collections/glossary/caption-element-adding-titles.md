---
id: 173a6c1d-5292-4f4b-b21a-2a1fb2dd6598
blueprint: html
title: 'Caption Element: Descriptive Titles for Tables'
teaser: 'The caption HTML element is used to provide a title or description for a table, offering context and improving accessibility for users.'
reference_title:
  code: '<caption>'
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
        text: '<caption>'
      -
        type: text
        text: ' HTML element is used to provide a title or description for a table, enhancing its accessibility and providing context for the data it contains. This element is placed as the first child of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<table>'
      -
        type: text
        text: ' element, ensuring that users and assistive technologies can quickly understand the purpose of the table without having to read through all the data it presents. The content of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<caption>'
      -
        type: text
        text: ' is typically rendered above the table and is often centered by default, although this can be adjusted using CSS.'
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
        text: '<caption>'
      -
        type: text
        text: " tag is particularly useful for users who rely on screen readers, as it allows them to grasp the table's content and relevance more efficiently. While the "
      -
        type: text
        marks:
          -
            type: code
        text: align
      -
        type: text
        text: ' attribute was historically used to control the position of the caption (with values like '
      -
        type: text
        marks:
          -
            type: code
        text: top
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: bottom
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: left
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: code
        text: right
      -
        type: text
        text: '), it has been deprecated in HTML5. Instead, CSS properties such as '
      -
        type: text
        marks:
          -
            type: code
        text: caption-side
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: code
        text: text-align
      -
        type: text
        text: ' should be used for styling. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<caption>'
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
          <table>
            <caption>Monthly Sales Report</caption>
            <tr>
              <th>Month</th>
              <th>Sales</th>
            </tr>
            <tr>
              <td>January</td>
              <td>$10,000</td>
            </tr>
            <tr>
              <td>February</td>
              <td>$12,000</td>
            </tr>
          </table>
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
        text: '<caption>'
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
        text: '<caption>'
      -
        type: text
        text: ' element does not have any specific attributes of its own, but it supports all global attributes. These include:'
  -
    type: set
    attrs:
      id: m0h4n8yb
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
              - 'Defines a unique identifier for the element, useful for JavaScript and CSS.'
          -
            cells:
              - style
              - 'Contains inline CSS styles for the element.'
          -
            cells:
              - title
              - 'Provides additional information about the element, often displayed as a tooltip.'
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
        text: '<caption>'
      -
        type: text
        text: ' element is an important tool for adding descriptive titles to tables, aiding in both user comprehension and accessibility. It should be used judiciously to ensure that tables are informative and easy to navigate.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-caption-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: table_content
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743364991
seo_title: 'HTML Caption Element: Table Titles Explained'
seo_description: 'Learn about the caption HTML element for adding titles to tables, enhancing context and accessibility.'
og_title: 'Understanding the HTML Caption Element'
og_description: 'Discover how the caption element in HTML provides descriptive titles for tables, improving context and accessibility for users.'
date: '2025-03-30'
---
