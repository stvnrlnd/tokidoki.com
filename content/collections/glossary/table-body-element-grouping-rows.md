---
id: 85b67ac0-64a8-461f-bc56-14f103d1916c
blueprint: html
title: 'Tbody Element: Grouping Table Body Content'
teaser: 'The tbody HTML element is used to group the body content in a table, containing one or more rows (<tr>) of data. It is a structural element that helps organize table data separately from the table header (<thead>) and footer (<tfoot>), enhancing readability and accessibility.'
reference_title:
  code: '<tbody>'
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
        text: '<tbody>'
      -
        type: text
        text: ' HTML element is used to group the body content in a table. It is a semantic element that helps organize and structure the rows of data within a table, separating them from the header ('
      -
        type: text
        marks:
          -
            type: code
        text: '<thead>'
      -
        type: text
        text: ') and footer ('
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
      -
        type: text
        text: ') sections. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<tbody>'
      -
        type: text
        text: ' element is particularly useful for styling and scripting purposes, as it allows developers to target the main content of the table specifically.'
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
        text: '<tbody>'
      -
        type: text
        text: ' element contains one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' (table row) elements, each of which can contain '
      -
        type: text
        marks:
          -
            type: code
        text: '<td>'
      -
        type: text
        text: ' (table data) elements. It is typically used in conjunction with '
      -
        type: text
        marks:
          -
            type: code
        text: '<thead>'
      -
        type: text
        text: ' and '
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
      -
        type: text
        text: ' to create a well-structured table. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<tbody>'
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
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
              </tr>
            </thead>
            <tbody>
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
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3">End of Data</td>
              </tr>
            </tfoot>
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
        text: '<tbody>'
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
        text: '<tbody>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0ios6mj
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
                text: '<tbody>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content is the main body of the table, which helps both users and search engines understand the structure of the table.'
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
                text: 'Styling and Scripting'
              -
                type: text
                text: ': Using '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<tbody>'
              -
                type: text
                text: ' allows developers to target the body of the table specifically for styling and scripting, making it easier to apply styles or manipulate data rows with JavaScript.'
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
                text: '<tbody>'
              -
                type: text
                text: ' element, along with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<thead>'
              -
                type: text
                text: ' and '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<tfoot>'
              -
                type: text
                text: ', enhances accessibility by providing a clear structure that is easily interpreted by screen readers and other assistive technologies.'
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
        text: '<tbody>'
      -
        type: text
        text: ' element is a key component for structuring and organizing the body content of a table. It enhances semantic clarity, accessibility, and the ability to style and script table content effectively. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<tbody>'
      -
        type: text
        text: ' element, developers can create well-structured and easily manageable tables in HTML documents.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-tbody-element'
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
updated_at: 1743366727
seo_title: 'HTML Tbody Element: Table Body Content Explained'
seo_description: 'Discover the tbody HTML element for grouping the main body content of a table, organizing rows of data distinct from headers and footers.'
og_title: 'Understanding the HTML Tbody Element'
og_description: 'Learn how the tbody element in HTML is used to structure the body content of a table, separating it from headers and footers for improved organization and clarity.'
date: '2025-03-30'
---
