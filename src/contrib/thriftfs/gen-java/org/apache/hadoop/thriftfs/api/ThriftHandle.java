/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
package org.apache.hadoop.thriftfs.api;

import java.util.List;
import java.util.ArrayList;
import java.util.Map;
import java.util.HashMap;
import java.util.Set;
import java.util.HashSet;
import java.util.Collections;

import org.apache.thrift.*;
import org.apache.thrift.meta_data.*;
import org.apache.thrift.protocol.*;

public class ThriftHandle implements TBase, java.io.Serializable, Cloneable {
  private static final TStruct STRUCT_DESC = new TStruct("ThriftHandle");
  private static final TField ID_FIELD_DESC = new TField("id", TType.I64, (short)-1);

  public long id;
  public static final int ID = -1;

  private final Isset __isset = new Isset();
  private static final class Isset implements java.io.Serializable {
    public boolean id = false;
  }

  public static final Map<Integer, FieldMetaData> metaDataMap = Collections.unmodifiableMap(new HashMap<Integer, FieldMetaData>() {{
    put(ID, new FieldMetaData("id", TFieldRequirementType.DEFAULT, 
        new FieldValueMetaData(TType.I64)));
  }});

  static {
    FieldMetaData.addStructMetaDataMap(ThriftHandle.class, metaDataMap);
  }

  public ThriftHandle() {
  }

  public ThriftHandle(
    long id)
  {
    this();
    this.id = id;
    this.__isset.id = true;
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public ThriftHandle(ThriftHandle other) {
    __isset.id = other.__isset.id;
    this.id = other.id;
  }

  @Override
  public ThriftHandle clone() {
    return new ThriftHandle(this);
  }

  public long getId() {
    return this.id;
  }

  public void setId(long id) {
    this.id = id;
    this.__isset.id = true;
  }

  public void unsetId() {
    this.__isset.id = false;
  }

  // Returns true if field id is set (has been asigned a value) and false otherwise
  public boolean isSetId() {
    return this.__isset.id;
  }

  public void setIdIsSet(boolean value) {
    this.__isset.id = value;
  }

  public void setFieldValue(int fieldID, Object value) {
    switch (fieldID) {
    case ID:
      if (value == null) {
        unsetId();
      } else {
        setId((Long)value);
      }
      break;

    default:
      throw new IllegalArgumentException("Field " + fieldID + " doesn't exist!");
    }
  }

  public Object getFieldValue(int fieldID) {
    switch (fieldID) {
    case ID:
      return new Long(getId());

    default:
      throw new IllegalArgumentException("Field " + fieldID + " doesn't exist!");
    }
  }

  // Returns true if field corresponding to fieldID is set (has been asigned a value) and false otherwise
  public boolean isSet(int fieldID) {
    switch (fieldID) {
    case ID:
      return isSetId();
    default:
      throw new IllegalArgumentException("Field " + fieldID + " doesn't exist!");
    }
  }

  @Override
  public boolean equals(Object that) {
    if (that == null)
      return false;
    if (that instanceof ThriftHandle)
      return this.equals((ThriftHandle)that);
    return false;
  }

  public boolean equals(ThriftHandle that) {
    if (that == null)
      return false;

    boolean this_present_id = true;
    boolean that_present_id = true;
    if (this_present_id || that_present_id) {
      if (!(this_present_id && that_present_id))
        return false;
      if (this.id != that.id)
        return false;
    }

    return true;
  }

  @Override
  public int hashCode() {
    return 0;
  }

  public void read(TProtocol iprot) throws TException {
    TField field;
    iprot.readStructBegin();
    while (true)
    {
      field = iprot.readFieldBegin();
      if (field.type == TType.STOP) { 
        break;
      }
      switch (field.id)
      {
        case ID:
          if (field.type == TType.I64) {
            this.id = iprot.readI64();
            this.__isset.id = true;
          } else { 
            TProtocolUtil.skip(iprot, field.type);
          }
          break;
        default:
          TProtocolUtil.skip(iprot, field.type);
          break;
      }
      iprot.readFieldEnd();
    }
    iprot.readStructEnd();


    // check for required fields of primitive type, which can't be checked in the validate method
    validate();
  }

  public void write(TProtocol oprot) throws TException {
    validate();

    oprot.writeStructBegin(STRUCT_DESC);
    oprot.writeFieldBegin(ID_FIELD_DESC);
    oprot.writeI64(this.id);
    oprot.writeFieldEnd();
    oprot.writeFieldStop();
    oprot.writeStructEnd();
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder("ThriftHandle(");
    boolean first = true;

    sb.append("id:");
    sb.append(this.id);
    first = false;
    sb.append(")");
    return sb.toString();
  }

  public void validate() throws TException {
    // check for required fields
    // check that fields of type enum have valid values
  }

}

