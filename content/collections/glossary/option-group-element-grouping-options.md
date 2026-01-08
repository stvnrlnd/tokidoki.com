---
id: bbe98364-14b1-41cf-bf79-8ffd0d1c8eee
blueprint: html
title: 'Optgroup Element: Grouping Options in Select Menus'
teaser: 'The optgroup HTML element is used to group related options within a select dropdown list, enhancing usability by organizing long lists of choices into logical categories. This improves navigation and selection efficiency for users.'
reference_title:
  code: '<optgroup>'
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
        text: '<optgroup>'
      -
        type: text
        text: ' HTML element is used to group related '
      -
        type: text
        marks:
          -
            type: code
        text: '<option>'
      -
        type: text
        text: ' elements within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
      -
        type: text
        text: ' dropdown list. This element is particularly useful for organizing long lists of options into categories, making it easier for users to navigate and select their desired option. By visually grouping related options, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<optgroup>'
      -
        type: text
        text: ' element enhances the usability and readability of dropdown menus.'
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
        text: '<optgroup>'
      -
        type: text
        text: ' element is used within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
      -
        type: text
        text: ' element and contains one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<option>'
      -
        type: text
        text: ' elements. It provides a label for the group, which is displayed as a non-selectable heading within the dropdown menu. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<optgroup>'
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
          <label for="cars">Choose a car:</label>
          <select id="cars" name="cars">
            <optgroup label="German Cars">
              <option value="audi">Audi</option>
              <option value="bmw">BMW</option>
            </optgroup>
            <optgroup label="Japanese Cars">
              <option value="toyota">Toyota</option>
              <option value="honda">Honda</option>
            </optgroup>
          </select>
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
        text: '<optgroup>'
  -
    type: set
    attrs:
      id: m0iha1ku
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
              - label
              - 'Specifies the label for the option group, which is displayed as a heading within the dropdown menu.'
          -
            cells:
              - disabled
              - 'A Boolean attribute that indicates whether the option group is disabled, preventing all options within it from being selected.'
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
        text: '<optgroup>'
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
                text: Usability
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<optgroup>'
              -
                type: text
                text: ' element improves the usability of dropdown menus by organizing options into categories, making it easier for users to find and select their desired option.'
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
                text: label
              -
                type: text
                text: ' attribute ensures that screen readers and other assistive technologies can convey the structure and organization of the dropdown menu to users.'
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
                text: 'Visual Clarity'
              -
                type: text
                text: ': By grouping related options, the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<optgroup>'
              -
                type: text
                text: ' element provides visual clarity and a more organized appearance for dropdown menus, especially those with many options.'
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
        text: '<optgroup>'
      -
        type: text
        text: ' element is a valuable tool for organizing related options within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
      -
        type: text
        text: ' dropdown list. It enhances the usability, accessibility, and visual clarity of forms, making it easier for users to navigate and select options from long lists. Its attributes allow developers to specify labels and disable groups, providing flexibility in form design.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-optgroup-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: forms_and_input
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366460
seo_title: 'HTML Optgroup Element: Grouping Options Explained'
seo_description: 'Explore the optgroup HTML element for organizing options in select menus, improving user navigation and selection efficiency.'
og_title: 'Understanding the HTML Optgroup Element'
og_description: 'Learn how the optgroup element in HTML is used to group related options within select menus, providing a structured and user-friendly way to navigate long lists of choices.'
date: '2025-03-30'
---
