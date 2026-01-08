---
id: 52bfd648-f771-4465-94a3-e903486d6dfa
blueprint: html
title: 'Tfoot Element: Table Footer Section'
teaser: 'The tfoot HTML element is used to define the footer section of a table, containing rows of summary or aggregate data. It is typically used in conjunction with the thead and tbody elements to semantically structure a table, providing valuable contextual information for both visual presentation and assistive technologies.'
reference_title:
  code: '<tfoot>'
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
        text: '<tfoot>'
      -
        type: text
        text: ' HTML element is used to group the footer content in a table. It is a semantic element that helps organize and structure the rows of data that serve as the footer of the table, separating them from the header ('
      -
        type: text
        marks:
          -
            type: code
        text: '<thead>'
      -
        type: text
        text: ') and body ('
      -
        type: text
        marks:
          -
            type: code
        text: '<tbody>'
      -
        type: text
        text: ') sections. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
      -
        type: text
        text: ' element is particularly useful for summarizing data, providing totals, or including any other information that should appear at the bottom of the table.'
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
        text: '<tfoot>'
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
        text: ' (table data) or '
      -
        type: text
        marks:
          -
            type: code
        text: '<th>'
      -
        type: text
        text: ' (table header) elements. It is typically used to display summary information, such as totals or other aggregate data, and should be placed after the '
      -
        type: text
        marks:
          -
            type: code
        text: '<thead>'
      -
        type: text
        text: ' and before the '
      -
        type: text
        marks:
          -
            type: code
        text: '<tbody>'
      -
        type: text
        text: ' in the HTML markup, although it is visually rendered at the bottom of the table. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
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
            <tfoot>
              <tr>
                <td>Total</td>
                <td>15</td>
                <td>$1.50</td>
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
        text: '<tfoot>'
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
        text: '<tfoot>'
      -
        type: text
        text: ' element does not have specific attributes beyond the global attributes, which include:'
  -
    type: set
    attrs:
      id: m0ip0u0m
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
                text: '<tfoot>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content is the footer of the table, which helps both users and search engines understand the structure of the table.'
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
                text: '<tfoot>'
              -
                type: text
                text: ' allows developers to target the footer of the table specifically for styling and scripting, making it easier to apply styles or manipulate footer rows with JavaScript.'
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
                text: '<tfoot>'
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
                text: '<tbody>'
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
        text: '<tfoot>'
      -
        type: text
        text: ' element is a key component for structuring and organizing the footer content of a table. It enhances semantic clarity, accessibility, and the ability to style and script table content effectively. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
      -
        type: text
        text: ' element, developers can create well-structured and easily manageable tables in HTML documents.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-tfoot-element'
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
updated_at: 1743366756
seo_title: 'HTML Tfoot Element: Table Footer Explained'
seo_description: 'Explore the tfoot HTML element for defining the footer section of a table, organizing summary or aggregate data in a structured manner.'
og_title: 'Understanding the HTML Tfoot Element'
og_description: 'Learn how the tfoot element in HTML is used to create a table footer, providing a structured way to present summary or aggregate data, enhancing both readability and accessibility.'
date: '2025-03-30'
---
