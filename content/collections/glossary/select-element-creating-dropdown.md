---
id: 5190c7ac-b181-403e-b6bb-ed047a9a96be
blueprint: html
title: 'Select Element: Dropdown Selection Menu'
teaser: 'The select HTML element is used to create a dropdown menu that allows users to choose one or more options from a list. It contains option elements, each representing a selectable item, and can be enhanced with optgroup elements to organize options into categories.'
reference_title:
  code: '<select>'
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
        text: '<select>'
      -
        type: text
        text: ' HTML element is used to create a dropdown list that allows users to choose one or more options from a predefined set. It is a form control element that provides a way for users to select an option from a list, making it useful for collecting user input in forms.'
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
        text: '<select>'
      -
        type: text
        text: ' element contains one or more '
      -
        type: text
        marks:
          -
            type: code
        text: '<option>'
      -
        type: text
        text: ' elements, each representing a possible choice in the dropdown list. It can also include '
      -
        type: text
        marks:
          -
            type: code
        text: '<optgroup>'
      -
        type: text
        text: ' elements to group related options together. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
      -
        type: text
        text: ' element can be configured to allow single or multiple selections. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
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
          <label for="fruits">Choose a fruit:</label>
          <select id="fruits" name="fruits">
            <option value="apple">Apple</option>
            <option value="banana">Banana</option>
            <option value="cherry">Cherry</option>
          </select>
  -
    type: paragraph
    content:
      -
        type: text
        text: 'To allow multiple selections, the '
      -
        type: text
        marks:
          -
            type: code
        text: multiple
      -
        type: text
        text: ' attribute can be added:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <label for="fruits">Choose your favorite fruits:</label>
          <select id="fruits" name="fruits" multiple>
            <option value="apple">Apple</option>
            <option value="banana">Banana</option>
            <option value="cherry">Cherry</option>
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
        text: '<select>'
  -
    type: set
    attrs:
      id: m0iku44n
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
              - name
              - 'Specifies the name of the control, which is submitted with the form data.'
          -
            cells:
              - multiple
              - 'A Boolean attribute that allows multiple selections.'
          -
            cells:
              - size
              - 'Specifies the number of visible options in the dropdown list.'
          -
            cells:
              - disabled
              - 'A Boolean attribute that disables the control, preventing user interaction.'
          -
            cells:
              - required
              - 'A Boolean attribute that specifies that the user must select a value before submitting the form.'
          -
            cells:
              - autofocus
              - 'A Boolean attribute that specifies that the dropdown should automatically get focus when the page loads.'
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
        text: '<select>'
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
                text: 'User Interaction'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<select>'
              -
                type: text
                text: ' element provides a user-friendly way to select options from a list, making it ideal for forms where predefined choices are available.'
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
                text: ': Proper use of labels and attributes enhances accessibility, making it easier for users with disabilities to interact with dropdown lists.'
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
                text: 'Form Integration'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<select>'
              -
                type: text
                text: ' element integrates seamlessly with forms, allowing the selected value(s) to be submitted as part of the form data.'
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
        text: '<select>'
      -
        type: text
        text: ' element is a fundamental component for creating interactive forms that require user selection from a list of predefined options. Its attributes provide flexibility for specifying single or multiple selections, enhancing both usability and accessibility in web forms. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
      -
        type: text
        text: ' element is essential for collecting structured user input efficiently.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-select-element'
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
updated_at: 1743366617
seo_title: 'HTML Select Element: Dropdown Menus Explained'
seo_description: 'Explore the select HTML element for creating dropdown menus, enabling user selection from a list of options in forms.'
og_title: 'Understanding the HTML Select Element'
og_description: 'Learn how the select element in HTML is used to create interactive dropdown menus, allowing users to select from a list of options in web forms.'
date: '2025-03-30'
---
