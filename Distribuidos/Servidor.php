<?php
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


interface ServidorIf {
  /**
   * @param string $dato1
   * @param string $dato2
   * @param string $dato3
   * @return string
   */
  public function Usuario($dato1, $dato2, $dato3);
  /**
   * @param string $var1
   * @param string $var2
   * @param string $var3
   * @param string $var4
   * @param string $comp
   * @return string
   */
  public function Venue($var1, $var2, $var3, $var4, $comp);
  /**
   * @param string $rar1
   * @param string $rar2
   * @param string $rar3
   * @param string $rar4
   * @param string $conc
   * @return string
   */
  public function Evento($rar1, $rar2, $rar3, $rar4, $conc);
  /**
   * @param string $sas1
   * @param string $sas2
   * @return string
   */
  public function Login($sas1, $sas2);
  /**
   * @return string[]
   */
  public function Mostrar();
}


class ServidorClient implements \ServidorIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output=null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function Usuario($dato1, $dato2, $dato3)
  {
    $this->send_Usuario($dato1, $dato2, $dato3);
    return $this->recv_Usuario();
  }

  public function send_Usuario($dato1, $dato2, $dato3)
  {
    $args = new \Servidor_Usuario_args();
    $args->dato1 = $dato1;
    $args->dato2 = $dato2;
    $args->dato3 = $dato3;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'Usuario', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('Usuario', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_Usuario()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Servidor_Usuario_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Servidor_Usuario_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("Usuario failed: unknown result");
  }

  public function Venue($var1, $var2, $var3, $var4, $comp)
  {
    $this->send_Venue($var1, $var2, $var3, $var4, $comp);
    return $this->recv_Venue();
  }

  public function send_Venue($var1, $var2, $var3, $var4, $comp)
  {
    $args = new \Servidor_Venue_args();
    $args->var1 = $var1;
    $args->var2 = $var2;
    $args->var3 = $var3;
    $args->var4 = $var4;
    $args->comp = $comp;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'Venue', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('Venue', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_Venue()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Servidor_Venue_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Servidor_Venue_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("Venue failed: unknown result");
  }

  public function Evento($rar1, $rar2, $rar3, $rar4, $conc)
  {
    $this->send_Evento($rar1, $rar2, $rar3, $rar4, $conc);
    return $this->recv_Evento();
  }

  public function send_Evento($rar1, $rar2, $rar3, $rar4, $conc)
  {
    $args = new \Servidor_Evento_args();
    $args->rar1 = $rar1;
    $args->rar2 = $rar2;
    $args->rar3 = $rar3;
    $args->rar4 = $rar4;
    $args->conc = $conc;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'Evento', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('Evento', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_Evento()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Servidor_Evento_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Servidor_Evento_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("Evento failed: unknown result");
  }

  public function Login($sas1, $sas2)
  {
    $this->send_Login($sas1, $sas2);
    return $this->recv_Login();
  }

  public function send_Login($sas1, $sas2)
  {
    $args = new \Servidor_Login_args();
    $args->sas1 = $sas1;
    $args->sas2 = $sas2;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'Login', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('Login', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_Login()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Servidor_Login_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Servidor_Login_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("Login failed: unknown result");
  }

  public function Mostrar()
  {
    $this->send_Mostrar();
    return $this->recv_Mostrar();
  }

  public function send_Mostrar()
  {
    $args = new \Servidor_Mostrar_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'Mostrar', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('Mostrar', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_Mostrar()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\Servidor_Mostrar_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \Servidor_Mostrar_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("Mostrar failed: unknown result");
  }

}


// HELPER FUNCTIONS AND STRUCTURES

class Servidor_Usuario_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'dato1',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'dato2',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    3 => array(
      'var' => 'dato3',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $dato1 = null;
  /**
   * @var string
   */
  public $dato2 = null;
  /**
   * @var string
   */
  public $dato3 = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['dato1'])) {
        $this->dato1 = $vals['dato1'];
      }
      if (isset($vals['dato2'])) {
        $this->dato2 = $vals['dato2'];
      }
      if (isset($vals['dato3'])) {
        $this->dato3 = $vals['dato3'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Usuario_args';
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
            $xfer += $input->readString($this->dato1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->dato2);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->dato3);
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
    $xfer += $output->writeStructBegin('Servidor_Usuario_args');
    if ($this->dato1 !== null) {
      $xfer += $output->writeFieldBegin('dato1', TType::STRING, 1);
      $xfer += $output->writeString($this->dato1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dato2 !== null) {
      $xfer += $output->writeFieldBegin('dato2', TType::STRING, 2);
      $xfer += $output->writeString($this->dato2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dato3 !== null) {
      $xfer += $output->writeFieldBegin('dato3', TType::STRING, 3);
      $xfer += $output->writeString($this->dato3);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Usuario_result {
  static $isValidate = false;

  static $_TSPEC = array(
    0 => array(
      'var' => 'success',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Usuario_result';
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
        case 0:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->success);
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
    $xfer += $output->writeStructBegin('Servidor_Usuario_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::STRING, 0);
      $xfer += $output->writeString($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Venue_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'var1',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'var2',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    3 => array(
      'var' => 'var3',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    4 => array(
      'var' => 'var4',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    5 => array(
      'var' => 'comp',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $var1 = null;
  /**
   * @var string
   */
  public $var2 = null;
  /**
   * @var string
   */
  public $var3 = null;
  /**
   * @var string
   */
  public $var4 = null;
  /**
   * @var string
   */
  public $comp = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['var1'])) {
        $this->var1 = $vals['var1'];
      }
      if (isset($vals['var2'])) {
        $this->var2 = $vals['var2'];
      }
      if (isset($vals['var3'])) {
        $this->var3 = $vals['var3'];
      }
      if (isset($vals['var4'])) {
        $this->var4 = $vals['var4'];
      }
      if (isset($vals['comp'])) {
        $this->comp = $vals['comp'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Venue_args';
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
            $xfer += $input->readString($this->var1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->var2);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->var3);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->var4);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->comp);
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
    $xfer += $output->writeStructBegin('Servidor_Venue_args');
    if ($this->var1 !== null) {
      $xfer += $output->writeFieldBegin('var1', TType::STRING, 1);
      $xfer += $output->writeString($this->var1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->var2 !== null) {
      $xfer += $output->writeFieldBegin('var2', TType::STRING, 2);
      $xfer += $output->writeString($this->var2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->var3 !== null) {
      $xfer += $output->writeFieldBegin('var3', TType::STRING, 3);
      $xfer += $output->writeString($this->var3);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->var4 !== null) {
      $xfer += $output->writeFieldBegin('var4', TType::STRING, 4);
      $xfer += $output->writeString($this->var4);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->comp !== null) {
      $xfer += $output->writeFieldBegin('comp', TType::STRING, 5);
      $xfer += $output->writeString($this->comp);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Venue_result {
  static $isValidate = false;

  static $_TSPEC = array(
    0 => array(
      'var' => 'success',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Venue_result';
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
        case 0:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->success);
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
    $xfer += $output->writeStructBegin('Servidor_Venue_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::STRING, 0);
      $xfer += $output->writeString($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Evento_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'rar1',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'rar2',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    3 => array(
      'var' => 'rar3',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    4 => array(
      'var' => 'rar4',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    5 => array(
      'var' => 'conc',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $rar1 = null;
  /**
   * @var string
   */
  public $rar2 = null;
  /**
   * @var string
   */
  public $rar3 = null;
  /**
   * @var string
   */
  public $rar4 = null;
  /**
   * @var string
   */
  public $conc = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['rar1'])) {
        $this->rar1 = $vals['rar1'];
      }
      if (isset($vals['rar2'])) {
        $this->rar2 = $vals['rar2'];
      }
      if (isset($vals['rar3'])) {
        $this->rar3 = $vals['rar3'];
      }
      if (isset($vals['rar4'])) {
        $this->rar4 = $vals['rar4'];
      }
      if (isset($vals['conc'])) {
        $this->conc = $vals['conc'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Evento_args';
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
            $xfer += $input->readString($this->rar1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->rar2);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->rar3);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->rar4);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->conc);
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
    $xfer += $output->writeStructBegin('Servidor_Evento_args');
    if ($this->rar1 !== null) {
      $xfer += $output->writeFieldBegin('rar1', TType::STRING, 1);
      $xfer += $output->writeString($this->rar1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->rar2 !== null) {
      $xfer += $output->writeFieldBegin('rar2', TType::STRING, 2);
      $xfer += $output->writeString($this->rar2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->rar3 !== null) {
      $xfer += $output->writeFieldBegin('rar3', TType::STRING, 3);
      $xfer += $output->writeString($this->rar3);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->rar4 !== null) {
      $xfer += $output->writeFieldBegin('rar4', TType::STRING, 4);
      $xfer += $output->writeString($this->rar4);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->conc !== null) {
      $xfer += $output->writeFieldBegin('conc', TType::STRING, 5);
      $xfer += $output->writeString($this->conc);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Evento_result {
  static $isValidate = false;

  static $_TSPEC = array(
    0 => array(
      'var' => 'success',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Evento_result';
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
        case 0:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->success);
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
    $xfer += $output->writeStructBegin('Servidor_Evento_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::STRING, 0);
      $xfer += $output->writeString($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Login_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'sas1',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'sas2',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $sas1 = null;
  /**
   * @var string
   */
  public $sas2 = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['sas1'])) {
        $this->sas1 = $vals['sas1'];
      }
      if (isset($vals['sas2'])) {
        $this->sas2 = $vals['sas2'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Login_args';
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
            $xfer += $input->readString($this->sas1);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sas2);
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
    $xfer += $output->writeStructBegin('Servidor_Login_args');
    if ($this->sas1 !== null) {
      $xfer += $output->writeFieldBegin('sas1', TType::STRING, 1);
      $xfer += $output->writeString($this->sas1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sas2 !== null) {
      $xfer += $output->writeFieldBegin('sas2', TType::STRING, 2);
      $xfer += $output->writeString($this->sas2);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Login_result {
  static $isValidate = false;

  static $_TSPEC = array(
    0 => array(
      'var' => 'success',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Login_result';
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
        case 0:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->success);
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
    $xfer += $output->writeStructBegin('Servidor_Login_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::STRING, 0);
      $xfer += $output->writeString($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Mostrar_args {
  static $isValidate = false;

  static $_TSPEC = array(
    );


  public function __construct() {
  }

  public function getName() {
    return 'Servidor_Mostrar_args';
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
    $xfer += $output->writeStructBegin('Servidor_Mostrar_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Servidor_Mostrar_result {
  static $isValidate = false;

  static $_TSPEC = array(
    0 => array(
      'var' => 'success',
      'isRequired' => false,
      'type' => TType::LST,
      'etype' => TType::STRING,
      'elem' => array(
        'type' => TType::STRING,
        ),
      ),
    );

  /**
   * @var string[]
   */
  public $success = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'Servidor_Mostrar_result';
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
        case 0:
          if ($ftype == TType::LST) {
            $this->success = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->success []= $elem5;
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
    $xfer += $output->writeStructBegin('Servidor_Mostrar_result');
    if ($this->success !== null) {
      if (!is_array($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::LST, 0);
      {
        $output->writeListBegin(TType::STRING, count($this->success));
        {
          foreach ($this->success as $iter6)
          {
            $xfer += $output->writeString($iter6);
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

