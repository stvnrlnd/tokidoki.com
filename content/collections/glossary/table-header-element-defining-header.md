---
id: ccdfa554-ec22-4766-9f0d-328694fbd3d7
blueprint: html
title: 'TH Element: Table Header Cell'
teaser: 'The th HTML element is used to define a header cell in a table. It is typically used within a table row (<tr>) and is intended to label columns or rows, providing context for the data contained in the corresponding data cells (<td>). Header cells are often rendered with bold text and centered alignment by default.'
reference_title:
  code: '<th>'
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
        text: '<th>'
      -
        type: text
        text: ' HTML element is used to define a header cell in a table. It stands for "table header" and is used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' (table row) element to specify a header for a column or row in a table. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<th>'
      -
        type: text
        text: ' element is typically rendered with bold text and centered alignment by default, providing a clear distinction from regular table data cells ('
      -
        type: text
        marks:
          -
            type: code
        text: '<td>'
      -
        type: text
        text: ).
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
        text: '<th>'
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
        text: ' element, which is part of a '
      -
        type: text
        marks:
          -
            type: code
        text: '<table>'
      -
        type: text
        text: '. It can contain text, images, or other inline elements that serve as headings for the data in the corresponding columns or rows. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<th>'
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
        text: '<th>'
  -
    type: set
    attrs:
      id: m0ipctli
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
              - 'Specifies the number of columns a header cell should span.'
          -
            cells:
              - rowspan
              - 'Specifies the number of rows a header cell should span.'
          -
            cells:
              - headers
              - 'Specifies one or more header cells that the cell is related to, enhancing accessibility.'
          -
            cells:
              - scope
              - 'Defines the scope of the header cell. Possible values are col, colgroup, row, and rowgroup, indicating whether the header applies to a column, column group, row, or row group.'
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
        text: '<th>'
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
                text: 'Semantic Meaning'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<th>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content is a header for a table column or row, which helps both users and search engines understand the structure of the table.'
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
                text: ': Proper use of the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<th>'
              -
                type: text
                text: ' element, along with attributes like '
              -
                type: text
                marks:
                  -
                    type: code
                text: scope
              -
                type: text
                text: ', enhances accessibility by helping screen readers and other assistive technologies understand the relationships between table headers and data cells.'
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
                text: ': While the default styling uses bold text and centered alignment, the appearance of text within a '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<th>'
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
        text: '<th>'
      -
        type: text
        text: ' element is a fundamental component for creating tables in HTML, providing a way to define headers for columns or rows. Its attributes allow for flexibility in spanning multiple rows or columns and improving accessibility, making it an essential element for presenting tabular data effectively.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-th-element'
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
updated_at: 1743366774
seo_title: 'HTML TH Element: Table Header Cells Explained'
seo_description: 'Explore the th HTML element for defining header cells in a table, offering context and labels for data columns and rows.'
og_title: 'Understanding the HTML TH Element'
og_description: 'Learn how the th element in HTML is used to create header cells in tables, providing labels and context for data, enhancing table structure and readability.'
date: '2025-03-30'
---
