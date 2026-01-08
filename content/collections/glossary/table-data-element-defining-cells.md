---
id: 681330bd-fa0f-42e4-af2c-60f1f91d893e
blueprint: html
title: 'TD Element: Table Data Cell'
teaser: 'The td HTML element is used to define a standard data cell within a table. It is a fundamental component of a table, used within a table row (<tr>) to contain data, which can include text, images, lists, or other elements.'
reference_title:
  code: '<td>'
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
        text: '<td>'
      -
        type: text
        text: ' HTML element is used to define a cell in a table that contains data. It stands for "table data" and is a fundamental component of HTML tables, used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' (table row) element to display data in a structured format. Each '
      -
        type: text
        marks:
          -
            type: code
        text: '<td>'
      -
        type: text
        text: ' element represents one cell in the table and can contain text, images, lists, links, or other HTML elements.'
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
        text: '<td>'
      -
        type: text
        text: ' element is used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' element, which in turn is used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<table>'
      -
        type: text
        text: ' element. It can contain various types of content and can be styled individually or as part of a table. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<td>'
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
            <tr>
              <td>Alice</td>
              <td>30</td>
              <td>New York</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>25</td>
              <td>Los Angeles</td>
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
        text: '<td>'
  -
    type: set
    attrs:
      id: m0iouukt
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
              - colspan
              - 'Specifies the number of columns a cell should span.'
          -
            cells:
              - rowspan
              - 'Specifies the number of rows a cell should span.'
          -
            cells:
              - headers
              - 'Specifies one or more header cells (`<th>`) that the cell is related to, improving accessibility.'
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
        text: '<td>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
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
                text: 'Data Presentation'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<td>'
              -
                type: text
                text: ' element is essential for presenting data in a tabular format, allowing for organized and readable display of information.'
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
                text: ': Cells defined with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<td>'
              -
                type: text
                text: ' can be styled individually or collectively using CSS, providing flexibility in design and presentation.'
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
                text: ': Proper use of attributes like '
              -
                type: text
                marks:
                  -
                    type: code
                text: headers
              -
                type: text
                text: ', along with semantic table structure, enhances accessibility by helping screen readers and other assistive technologies understand the relationships between table cells.'
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
        text: '<td>'
      -
        type: text
        text: ' element is a key component for creating tables in HTML, providing a way to display data in a structured and organized manner. Its attributes allow for flexibility in spanning multiple rows or columns and improving accessibility, making it an essential element for presenting tabular data effectively.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-td-element'
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
updated_at: 1743366738
seo_title: 'HTML TD Element: Table Data Cells Explained'
seo_description: 'Explore the td HTML element for defining data cells in a table, essential for organizing and displaying data within rows.'
og_title: 'Understanding the HTML TD Element'
og_description: 'Learn how the td element in HTML is used to create data cells in tables, providing structure and organization for displaying information in rows.'
date: '2025-03-30'
---
