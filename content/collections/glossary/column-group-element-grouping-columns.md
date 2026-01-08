---
id: f6b213f4-9a9b-4941-a860-c5b17765c545
blueprint: html
title: 'Colgroup Element: Grouping Table Columns'
teaser: 'The colgroup HTML element is used to group one or more columns in a table, allowing for collective styling and formatting of entire columns.'
reference_title:
  code: '<colgroup>'
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
        text: '<colgroup>'
      -
        type: text
        text: ' HTML element is used to group one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<col>'
      -
        type: text
        text: " elements within a table, allowing developers to apply styles or attributes to entire columns rather than individual cells. This element is particularly useful for improving the readability and maintainability of code, especially when dealing with large tables. By defining column groups, you can apply consistent styling across multiple columns, making it easier to manage and update the table's appearance."
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
        text: '<colgroup>'
      -
        type: text
        text: ' element must be a child of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<table>'
      -
        type: text
        text: ' element and is typically placed after any '
      -
        type: text
        marks:
          -
            type: code
        text: '<caption>'
      -
        type: text
        text: ' elements and before any '
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
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<tfoot>'
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: code
        text: '<tr>'
      -
        type: text
        text: ' elements. It can include a '
      -
        type: text
        marks:
          -
            type: code
        text: span
      -
        type: text
        text: ' attribute, which specifies the number of columns the group should span. If the '
      -
        type: text
        marks:
          -
            type: code
        text: span
      -
        type: text
        text: ' attribute is present, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<colgroup>'
      -
        type: text
        text: ' element should not contain any '
      -
        type: text
        marks:
          -
            type: code
        text: '<col>'
      -
        type: text
        text: ' elements. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<colgroup>'
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
            <caption>Weekly Schedule</caption>
            <colgroup span="5" class="weekdays"></colgroup>
            <colgroup span="2" class="weekend"></colgroup>
            <tr>
              <th>Mon</th>
              <th>Tue</th>
              <th>Wed</th>
              <th>Thu</th>
              <th>Fri</th>
              <th>Sat</th>
              <th>Sun</th>
            </tr>
            <tr>
              <td>Work</td>
              <td>Work</td>
              <td>Work</td>
              <td>Work</td>
              <td>Work</td>
              <td>Relax</td>
              <td>Relax</td>
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
        text: '<colgroup>'
  -
    type: set
    attrs:
      id: m0h54rg4
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
              - span
              - 'Specifies the number of consecutive columns the <colgroup> element should span.'
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
        text: '<colgroup>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript. While it does not directly affect the layout of the table, it provides a way to apply consistent styling to columns, enhancing the visual structure of tables.'
link: 'https://html.spec.whatwg.org/multipage/tables.html#the-colgroup-element'
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
updated_at: 1743365032
seo_title: 'HTML Colgroup Element: Column Grouping Explained'
seo_description: 'Learn about the colgroup HTML element for grouping table columns, simplifying styling and formatting.'
og_title: 'Understanding the HTML Colgroup Element'
og_description: 'Discover how the colgroup element in HTML is used to group table columns, enabling consistent styling and easier management of column properties.'
date: '2025-03-30'
---
