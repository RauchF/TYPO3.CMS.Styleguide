<?php
return [
    'ctrl' => [
        'title' => 'Form engine elements - group',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY crdate',
        'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'requestUdate' => 'group_requestUpdate_1'
    ],


    'columns' => [


        'hidden' => [
            'exclude' => 1,
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'Disable',
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'Publish Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0'
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'Expiration Date',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'max' => '20',
                'eval' => 'datetime',
                'default' => '0',
                'range' => [
                    'upper' => mktime(0, 0, 0, 12, 31, 2020)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],


        'group_db_1' => [
            'exclude' => 1,
            'label' => 'group_db_1 allowed=be_users,be_groups',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'be_users,be_groups',
                'maxitems' => 999,
            ],
        ],
        'group_db_2' => [
            'exclude' => 1,
            'label' => 'group_db_2 allowed=be_users,be_groups, show_thumbs=true',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'be_users,be_groups',
                'show_thumbs' => true,
                'maxitems' => 999,
            ],
        ],
        'group_db_3' => [
            'exclude' => 1,
            'label' => 'group_db_3 allowed=tx_styleguide_staticdata, wizard suggest, disable_controls=browser, position top',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_styleguide_staticdata',
                'disable_controls' => 'browser',
                'wizards' => [
                    '_POSITION' => 'top',
                    'suggest' => [
                        'type' => 'suggest',
                    ],
                ],
                'maxitems' => 999,
            ],
        ],
        'group_db_4' => [
            'exclude' => 1,
            'label' => 'group_db_4 allowed=tx_styleguide_staticdata, show_thumbs=true, size=1, wizard suggest, position bottom',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_styleguide_staticdata',
                'show_thumbs' => true,
                'size' => 1,
                'maxitems' => 1,
                'wizards' => [
                    '_POSITION' => 'bottom',
                    'suggest' => [
                        'type' => 'suggest',
                    ],
                ],
            ],
        ],
        'group_db_5' => [
            'exclude' => 1,
            'label' => 'group_db_5 readOnly=1',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'be_users',
                'readOnly' => 1,
            ]
        ],
        'group_db_6' => [
            // @todo: when and why is this useful?
            // @todo: something is totally wrong here, the structure within sys_file_reference ends up being
            // @todo: basically swapped with "foreign" and "local" fields!
            'exclude' => 1,
            'label' => 'group_db_6 FAL relation',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'sys_file',
                'MM' => 'sys_file_reference',
                'MM_match_fields' => [
                    'fieldname' => 'image_fal_group',
                ],
                'prepend_tname' => true,
                'appearance' => [
                    'elementBrowserAllowed' => 'jpg, png, gif',
                    'elementBrowserType' => 'file',
                ],
                'max_size' => 2000,
                'show_thumbs' => true,
                'size' => '3',
                'maxitems' => 200,
                'autoSizeMax' => 40,
            ],
        ],
        'group_db_7' => [
            'exclude' => 1,
            'label' => 'group_db_7 allowed=be_users, show_thumbs=true, prepend_tname=false',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'be_users',
                'maxitems' => 999,
                'show_thumbs' => true,
            ],
        ],


        'group_file_1' => [
            'exclude' => 1,
            'label' => 'group_file_1 show_thumbs=true',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => 'jpg, jpeg, png, gif',
                'disallowed' => 'ai',
                'show_thumbs' => true,
                'size' => 3,
                'uploadfolder' => 'uploads/tx_styleguide/',
                // @todo: Documented feature has no effect since upload field in form is not shown anymore (since fal?)
                'disable_controls' => 'upload',
                'max_size' => 2000,
                // @todo: does maxitems = 1 default hit here? YES!
                'maxitems' => 999,
            ],
        ],
        'group_file_2' => [
            'exclude' => 1,
            'label' => 'group_file_2 disable_controls=delete',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => 'jpg',
                'size' => 3,
                'uploadfolder' => 'uploads/tx_styleguide/',
                'disable_controls' => 'delete',
            ],
        ],
        'group_file_3' => [
            'exclude' => 1,
            'label' => 'group_file_3 size=1',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => 'jpg',
                'size' => 1,
                'uploadfolder' => 'uploads/tx_styleguide/',
            ],
        ],
        'group_file_4' => [
            'exclude' => 1,
            'label' => 'group_file_4 selectedListStyles',
            'config' => [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => 'jpg',
                'uploadfolder' => 'uploads/tx_styleguide/',
                'selectedListStyle' => 'width:400px;background-color:#ccffcc;',
            ],
        ],


        'group_folder_1' => [
            'exclude' => 1,
            'label' => 'group_folder_1',
            'config' => [
                'type' => 'group',
                'internal_type' => 'folder',
                'maxitems' => 999,
            ],
        ],

        'group_requestUpdate_1' => [
            'exclude' => 1,
            'label' => 'group_requestUpdate_1',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'be_users,be_groups',
                'maxitems' => 999,
            ],
        ],


        'flex_1' => [
            'exclude' => 1,
            'label' => 'flex_1',
            'config' => [
                'type' => 'flex',
                'ds' => [
                    'default' => '
                        <T3DataStructure>
                            <sheets>

                                <sDb>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>internal_type=db</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <group_db_1>
                                                <TCEforms>
                                                    <label>group_db_1 wizard suggest</label>
                                                    <config>
                                                        <type>group</type>
                                                        <internal_type>db</internal_type>
                                                        <allowed>tx_styleguide_staticdata</allowed>
                                                        <wizards>
                                                            <suggest>
                                                                <type>suggest</type>
                                                            </suggest>
                                                        </wizards>
                                                    </config>
                                                </TCEforms>
                                            </group_db_1>
                                        </el>
                                    </ROOT>
                                </sDb>

                                <sFile>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>internal_type=file</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <group_file_1>
                                                <TCEforms>
                                                    <label>group_file_1</label>
                                                    <config>
                                                        <type>group</type>
                                                        <internal_type>file</internal_type>
                                                        <allowed>jpg</allowed>
                                                        <size>3</size>
                                                        <uploadfolder>uploads/tx_styleguide/</uploadfolder>
                                                    </config>
                                                </TCEforms>
                                            </group_file_1>
                                        </el>
                                    </ROOT>
                                </sFile>
                                <sSuggestCheckCombination>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>internal_type=db+checkbox</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <settings.subelements>
                                                <TCEforms/>
                                                <title>Subelements</title>
                                                <section>1</section>
                                                <type>array</type>
                                                <el>
                                                    <item>
                                                        <type>array</type>
                                                        <title>Subelement</title>
                                                        <el>
                                                            <content>
                                                                <TCEforms>
                                                                    <label>Content</label>
                                                                    <config>
                                                                        <type>group</type>
                                                                        <internal_type>db</internal_type>
                                                                        <allowed>pages</allowed>
                                                                        <size>5</size>
                                                                        <maxitems>10</maxitems>
                                                                        <minitems>1</minitems>
                                                                        <show_thumbs>1</show_thumbs>
                                                                        <wizards>
                                                                            <suggest>
                                                                                <type>suggest</type>
                                                                            </suggest>
                                                                        </wizards>
                                                                    </config>
                                                                </TCEforms>
                                                            </content>
                                                        </el>
                                                    </item>
                                                </el>
                                            </settings.subelements>
                                            <settings.check>
                                                <TCEforms>
                                                    <label>Check it out</label>
                                                    <config>
                                                        <type>check</type>
                                                    </config>
                                                </TCEforms>
                                            </settings.check>
                                        </el>
                                    </ROOT>
                                </sSuggestCheckCombination>
                            </sheets>
                        </T3DataStructure>
                    ',
                ],
            ],
        ],


    ],


    'types' => [
        '0' => [
            'showitem' => '
                --div--;internal_type=db,
                    group_db_1, group_db_2, group_db_3, group_db_4, group_db_5, group_db_6, group_db_7,
                --div--;internal_type=file,
                    group_file_1, group_file_2, group_file_3, group_file_4,
                --div--;internal_type=folder,
                    group_folder_1,
                --div--;in flex,
                    flex_1,
                --div--;requestUpdate,
                    group_requestUpdate_1,
            ',
        ],
    ],


];
