---
id: 35fda461-bdaf-47d2-89f3-d6f4cffda422
blueprint: html
title: 'TR Element: Table Row'
teaser: 'The tr HTML element is used to define a row in a table. It acts as a container for table cells, which can be either header cells (<th>) or data cells (<td>). Each tr element represents a single row within the table structure, organizing the content horizontally.'
reference_title:
  code: '<tr>'
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
        text: '<tr>'
      -
        type: text
        text: ' HTML element is used to define a row in a table. It stands for "table row" and serves as a container for '
      -
        type: text
        marks:
          -
            type: code
        text: '<th>'
      -
        type: text
        text: ' (table header) and '
      -
        type: text
        marks:
          -
            type: code
        text: '<td>'
      -
        type: text
        text: ' (table data) elements, which represent the individual cells within the row. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' element is a fundamental part of HTML tables, organizing the data into horizontal rows.'
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
        text: '<tr>'
      -
        type: text
        text: ' element is used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<table>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<thead>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<tbody>'
      -
        type: text
        text: ', or '
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
      -
        type: text
        text: ' element to group cells into a single row. Each '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' contains one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<th>'
      -
        type: text
        text: ' or '
      -
        type: text
        marks:
          -
            type: code
        text: '<td>'
      -
        type: text
        text: " elements, depending on whether the row is part of the table's header or body. Here is an example of how the "
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
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
            <thead>
              <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Apples</td>
                <td>10</td>
                <td>$1.00</td>
              </tr>
              <tr>
                <td>Bananas</td>
                <td>5</td>
                <td>$0.50</td>
              </tr>
            </tbody>
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
        text: '<tr>'
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
        text: '<tr>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0ipib96
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
                text: 'Data Organization'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<tr>'
              -
                type: text
                text: ' element organizes data into rows, making it easier to read and understand information presented in a table format.'
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
                text: ': Rows defined with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<tr>'
              -
                type: text
                text: ' can be styled individually or collectively using CSS, allowing for customized design and presentation, such as alternating row colors for better readability.'
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
                text: '<tr>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content is a row in a table, which helps both users and search engines understand the structure of the table.'
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
        text: '<tr>'
      -
        type: text
        text: ' element is a fundamental component for creating tables in HTML, providing a way to organize data into rows. It enhances the readability and structure of tabular data, making it an essential element for presenting information effectively in a table format.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-tr-element'
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
updated_at: 1743366782
seo_title: 'HTML TR Element: Table Rows Explained'
seo_description: 'Discover the tr HTML element for defining rows in a table, organizing header and data cells horizontally within the table structure.'
og_title: 'Understanding the HTML TR Element'
og_description: 'Learn how the tr element in HTML is used to create rows in tables, serving as a container for header and data cells to organize content horizontally.'
date: '2025-03-30'
---
