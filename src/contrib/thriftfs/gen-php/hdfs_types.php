<?php
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';


class hadoop_api_DatanodeInfo {
  static $_TSPEC;

  public $name = null;
  public $storageID = null;
  public $host = null;
  public $thriftPort = null;
  public $capacity = null;
  public $dfsUsed = null;
  public $remaining = null;
  public $xceiverCount = null;
  public $state = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'storageID',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'host',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'thriftPort',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'capacity',
          'type' => TType::I64,
          ),
        6 => array(
          'var' => 'dfsUsed',
          'type' => TType::I64,
          ),
        7 => array(
          'var' => 'remaining',
          'type' => TType::I64,
          ),
        8 => array(
          'var' => 'xceiverCount',
          'type' => TType::I32,
          ),
        9 => array(
          'var' => 'state',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['storageID'])) {
        $this->storageID = $vals['storageID'];
      }
      if (isset($vals['host'])) {
        $this->host = $vals['host'];
      }
      if (isset($vals['thriftPort'])) {
        $this->thriftPort = $vals['thriftPort'];
      }
      if (isset($vals['capacity'])) {
        $this->capacity = $vals['capacity'];
      }
      if (isset($vals['dfsUsed'])) {
        $this->dfsUsed = $vals['dfsUsed'];
      }
      if (isset($vals['remaining'])) {
        $this->remaining = $vals['remaining'];
      }
      if (isset($vals['xceiverCount'])) {
        $this->xceiverCount = $vals['xceiverCount'];
      }
      if (isset($vals['state'])) {
        $this->state = $vals['state'];
      }
    }
  }

  public function getName() {
    return 'DatanodeInfo';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->storageID);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->host);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->thriftPort);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->capacity);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->dfsUsed);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->remaining);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->xceiverCount);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->state);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('DatanodeInfo');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageID !== null) {
      $xfer += $output->writeFieldBegin('storageID', TType::STRING, 2);
      $xfer += $output->writeString($this->storageID);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->host !== null) {
      $xfer += $output->writeFieldBegin('host', TType::STRING, 3);
      $xfer += $output->writeString($this->host);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->thriftPort !== null) {
      $xfer += $output->writeFieldBegin('thriftPort', TType::I32, 4);
      $xfer += $output->writeI32($this->thriftPort);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->capacity !== null) {
      $xfer += $output->writeFieldBegin('capacity', TType::I64, 5);
      $xfer += $output->writeI64($this->capacity);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dfsUsed !== null) {
      $xfer += $output->writeFieldBegin('dfsUsed', TType::I64, 6);
      $xfer += $output->writeI64($this->dfsUsed);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->remaining !== null) {
      $xfer += $output->writeFieldBegin('remaining', TType::I64, 7);
      $xfer += $output->writeI64($this->remaining);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->xceiverCount !== null) {
      $xfer += $output->writeFieldBegin('xceiverCount', TType::I32, 8);
      $xfer += $output->writeI32($this->xceiverCount);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->state !== null) {
      $xfer += $output->writeFieldBegin('state', TType::I32, 9);
      $xfer += $output->writeI32($this->state);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class hadoop_api_Block {
  static $_TSPEC;

  public $blockId = null;
  public $path = null;
  public $numBytes = null;
  public $genStamp = null;
  public $nodes = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'blockId',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'path',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'numBytes',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'genStamp',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'nodes',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => 'hadoop_api_DatanodeInfo',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['blockId'])) {
        $this->blockId = $vals['blockId'];
      }
      if (isset($vals['path'])) {
        $this->path = $vals['path'];
      }
      if (isset($vals['numBytes'])) {
        $this->numBytes = $vals['numBytes'];
      }
      if (isset($vals['genStamp'])) {
        $this->genStamp = $vals['genStamp'];
      }
      if (isset($vals['nodes'])) {
        $this->nodes = $vals['nodes'];
      }
    }
  }

  public function getName() {
    return 'Block';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->blockId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->path);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->numBytes);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->genStamp);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::LST) {
            $this->nodes = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new hadoop_api_DatanodeInfo();
              $xfer += $elem5->read($input);
              $this->nodes []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Block');
    if ($this->blockId !== null) {
      $xfer += $output->writeFieldBegin('blockId', TType::I64, 1);
      $xfer += $output->writeI64($this->blockId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->path !== null) {
      $xfer += $output->writeFieldBegin('path', TType::STRING, 2);
      $xfer += $output->writeString($this->path);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->numBytes !== null) {
      $xfer += $output->writeFieldBegin('numBytes', TType::I64, 3);
      $xfer += $output->writeI64($this->numBytes);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->genStamp !== null) {
      $xfer += $output->writeFieldBegin('genStamp', TType::I64, 4);
      $xfer += $output->writeI64($this->genStamp);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->nodes !== null) {
      if (!is_array($this->nodes)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('nodes', TType::LST, 5);
      {
        $output->writeListBegin(TType::STRUCT, count($this->nodes));
        {
          foreach ($this->nodes as $iter6)
          {
            $xfer += $iter6->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class hadoop_api_Stat {
  static $_TSPEC;

  public $path = null;
  public $isDir = null;
  public $atime = null;
  public $mtime = null;
  public $perms = null;
  public $owner = null;
  public $group = null;
  public $fileCount = null;
  public $directoryCount = null;
  public $quota = null;
  public $spaceConsumed = null;
  public $spaceQuota = null;
  public $length = null;
  public $blockSize = null;
  public $replication = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'path',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'isDir',
          'type' => TType::BOOL,
          ),
        3 => array(
          'var' => 'atime',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'mtime',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'perms',
          'type' => TType::I16,
          ),
        6 => array(
          'var' => 'owner',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'group',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'fileCount',
          'type' => TType::I64,
          ),
        9 => array(
          'var' => 'directoryCount',
          'type' => TType::I64,
          ),
        10 => array(
          'var' => 'quota',
          'type' => TType::I64,
          ),
        11 => array(
          'var' => 'spaceConsumed',
          'type' => TType::I64,
          ),
        12 => array(
          'var' => 'spaceQuota',
          'type' => TType::I64,
          ),
        13 => array(
          'var' => 'length',
          'type' => TType::I64,
          ),
        14 => array(
          'var' => 'blockSize',
          'type' => TType::I64,
          ),
        15 => array(
          'var' => 'replication',
          'type' => TType::I16,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['path'])) {
        $this->path = $vals['path'];
      }
      if (isset($vals['isDir'])) {
        $this->isDir = $vals['isDir'];
      }
      if (isset($vals['atime'])) {
        $this->atime = $vals['atime'];
      }
      if (isset($vals['mtime'])) {
        $this->mtime = $vals['mtime'];
      }
      if (isset($vals['perms'])) {
        $this->perms = $vals['perms'];
      }
      if (isset($vals['owner'])) {
        $this->owner = $vals['owner'];
      }
      if (isset($vals['group'])) {
        $this->group = $vals['group'];
      }
      if (isset($vals['fileCount'])) {
        $this->fileCount = $vals['fileCount'];
      }
      if (isset($vals['directoryCount'])) {
        $this->directoryCount = $vals['directoryCount'];
      }
      if (isset($vals['quota'])) {
        $this->quota = $vals['quota'];
      }
      if (isset($vals['spaceConsumed'])) {
        $this->spaceConsumed = $vals['spaceConsumed'];
      }
      if (isset($vals['spaceQuota'])) {
        $this->spaceQuota = $vals['spaceQuota'];
      }
      if (isset($vals['length'])) {
        $this->length = $vals['length'];
      }
      if (isset($vals['blockSize'])) {
        $this->blockSize = $vals['blockSize'];
      }
      if (isset($vals['replication'])) {
        $this->replication = $vals['replication'];
      }
    }
  }

  public function getName() {
    return 'Stat';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->path);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDir);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->atime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->mtime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->perms);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->owner);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->group);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->fileCount);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->directoryCount);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->quota);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->spaceConsumed);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->spaceQuota);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->length);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->blockSize);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->replication);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Stat');
    if ($this->path !== null) {
      $xfer += $output->writeFieldBegin('path', TType::STRING, 1);
      $xfer += $output->writeString($this->path);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDir !== null) {
      $xfer += $output->writeFieldBegin('isDir', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDir);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->atime !== null) {
      $xfer += $output->writeFieldBegin('atime', TType::I64, 3);
      $xfer += $output->writeI64($this->atime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->mtime !== null) {
      $xfer += $output->writeFieldBegin('mtime', TType::I64, 4);
      $xfer += $output->writeI64($this->mtime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->perms !== null) {
      $xfer += $output->writeFieldBegin('perms', TType::I16, 5);
      $xfer += $output->writeI16($this->perms);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->owner !== null) {
      $xfer += $output->writeFieldBegin('owner', TType::STRING, 6);
      $xfer += $output->writeString($this->owner);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->group !== null) {
      $xfer += $output->writeFieldBegin('group', TType::STRING, 7);
      $xfer += $output->writeString($this->group);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fileCount !== null) {
      $xfer += $output->writeFieldBegin('fileCount', TType::I64, 8);
      $xfer += $output->writeI64($this->fileCount);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->directoryCount !== null) {
      $xfer += $output->writeFieldBegin('directoryCount', TType::I64, 9);
      $xfer += $output->writeI64($this->directoryCount);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->quota !== null) {
      $xfer += $output->writeFieldBegin('quota', TType::I64, 10);
      $xfer += $output->writeI64($this->quota);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->spaceConsumed !== null) {
      $xfer += $output->writeFieldBegin('spaceConsumed', TType::I64, 11);
      $xfer += $output->writeI64($this->spaceConsumed);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->spaceQuota !== null) {
      $xfer += $output->writeFieldBegin('spaceQuota', TType::I64, 12);
      $xfer += $output->writeI64($this->spaceQuota);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->length !== null) {
      $xfer += $output->writeFieldBegin('length', TType::I64, 13);
      $xfer += $output->writeI64($this->length);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->blockSize !== null) {
      $xfer += $output->writeFieldBegin('blockSize', TType::I64, 14);
      $xfer += $output->writeI64($this->blockSize);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->replication !== null) {
      $xfer += $output->writeFieldBegin('replication', TType::I16, 15);
      $xfer += $output->writeI16($this->replication);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class hadoop_api_IOException extends TException {
  static $_TSPEC;

  public $msg = null;
  public $stack = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'msg',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'stack',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['msg'])) {
        $this->msg = $vals['msg'];
      }
      if (isset($vals['stack'])) {
        $this->stack = $vals['stack'];
      }
    }
  }

  public function getName() {
    return 'IOException';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->msg);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->stack);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('IOException');
    if ($this->msg !== null) {
      $xfer += $output->writeFieldBegin('msg', TType::STRING, 1);
      $xfer += $output->writeString($this->msg);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stack !== null) {
      $xfer += $output->writeFieldBegin('stack', TType::STRING, 2);
      $xfer += $output->writeString($this->stack);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class hadoop_api_QuotaException extends TException {
  static $_TSPEC;

  public $msg = null;
  public $stack = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'msg',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'stack',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['msg'])) {
        $this->msg = $vals['msg'];
      }
      if (isset($vals['stack'])) {
        $this->stack = $vals['stack'];
      }
    }
  }

  public function getName() {
    return 'QuotaException';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->msg);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->stack);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('QuotaException');
    if ($this->msg !== null) {
      $xfer += $output->writeFieldBegin('msg', TType::STRING, 1);
      $xfer += $output->writeString($this->msg);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stack !== null) {
      $xfer += $output->writeFieldBegin('stack', TType::STRING, 2);
      $xfer += $output->writeString($this->stack);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class hadoop_api_BlockData {
  static $_TSPEC;

  public $crc = null;
  public $length = null;
  public $data = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'crc',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'length',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'data',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['crc'])) {
        $this->crc = $vals['crc'];
      }
      if (isset($vals['length'])) {
        $this->length = $vals['length'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
    }
  }

  public function getName() {
    return 'BlockData';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->crc);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->length);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('BlockData');
    if ($this->crc !== null) {
      $xfer += $output->writeFieldBegin('crc', TType::I32, 1);
      $xfer += $output->writeI32($this->crc);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->length !== null) {
      $xfer += $output->writeFieldBegin('length', TType::I32, 2);
      $xfer += $output->writeI32($this->length);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::STRING, 3);
      $xfer += $output->writeString($this->data);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

?>
